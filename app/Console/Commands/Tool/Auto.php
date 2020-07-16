<?php

namespace App\Console\Commands\Tool;

use Auth;
use DB;
use Illuminate\Console\Command;
use Illuminate\Database\Query\Builder;
use Queue;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionObject;
use ReflectionProperty;
use Storage;

/**
 * dir目录下的Libs生成Facade，并支持静态调用的代码提示
 *
 * Class Auto
 *
 * @package App\Console\Commands\Tools
 */
class Auto extends Command
{

    private $dirs = [
        'Models'
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tool:auto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '自动生成facade、alias、代码提示';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws ReflectionException
     */
    public function handle()
    {
        // 代码提示
        if (!file_exists(base_path('atom'))) {
            mkdir(base_path('atom'), 0777);
        }

        $this->delAllFileInDir(base_path('atom'));
        $this->autoApp();

        $aliases = config('app.aliases');
        $this->autoStatic($aliases);

        // 工厂
        $this->autoStatic(['EloquentBuilder' => \Illuminate\Database\Eloquent\Builder::class]);
        $this->autoStatic(['QueryBuilder' => Builder::class]);
        $this->autoStatic(['Auth' => get_class(Auth::guard())]);
        $this->autoStatic(['DB' => get_class(DB::connection())]);
        $this->autoStatic(['Queue' => get_class(Queue::connection())]);
        $this->autoStatic(['Storage' => get_class(Storage::disk())]);

        dump('success');
    }


    /**
     * 获取dir下的类名
     * @param $dir
     *
     * @return array
     */
    private function getDirClassesName($dir)
    {
        $ret = [];
        $appPath = app_path();
        $files = $this->getDirFiles($appPath . "/$dir");
        foreach ($files as $file) {
            $className = substr(basename($file), 0, -4);
            $className = preg_replace("/\/+/", '\\', $className);
            $ret[] = $className;
        }
        return $ret;
    }


    /**
     * 删除目录下的文件
     * @var [type]
     */
    private function delAllFileInDir($dir)
    {
        $dh = opendir($dir);

        while ($file = readdir($dh)) {
            if ($file != "." && $file != "..") {
                $fullPath = $dir . "/" . $file;

                if (!is_dir($fullPath)) {
                    unlink($fullPath);
                } else {
                    $this->{__FUNCTION__}($fullPath);
                }
            }
        }

        closedir($dh);
    }

    /**
     * 获取目录下的所有文件
     * @param      $dir
     * @param bool $recursive
     *
     * @return array
     */
    public function getDirFiles($dir, $recursive = true)
    {
        $ret = [];
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file == '.' || $file == '..') {
                        continue;
                    }
                    $file = $dir . DIRECTORY_SEPARATOR . $file;
                    if ($recursive && is_dir($file)) {
//                        $ret = array_merge($ret, $this->getDirFiles($file));
                    } else {
                        $ret[] = $file;
                    }
                }
                closedir($dh);
            }
        }
        return $ret;
    }



    // -------------
    private function autoApp()
    {

        $docRet = [
            'mixed'
        ];

        $scanDirs = [];
        foreach ($this->dirs as $k => $v) {
            $scanDirs[] = app_path($v);
        }

        foreach ($scanDirs as $dir) {
            $docRet = array_merge($docRet, $this->getDirClassesName($dir));
        }

        $docRet = implode('|', $docRet);

        $php = "<?php
// 这个文件只做atom 的自动完成所使用，使用 php artisan {$this->signature} 生成
/**
 * @return {$docRet}
 */
function app() {
}
";
        // Model static call



        $file = base_path("atom/__" . "app.php");
        file_put_contents($file, $php, FILE_APPEND);
    }


    /**
     * 生成代码提示用的文件
     * @param $aliases
     *
     * @throws ReflectionException
     */
    private function autoStatic($aliases)
    {
        $notAllowStatic = [
            '__construct',
            '__destruct',
        ];

        $jumpFunc = [
            '__clone',
        ];

        $phpArr = [];
        foreach ($aliases as $alias => $real) {
            $phpArr[$alias] = "<?php \n";

            $ref = new ReflectionClass($real);
            if ($ref->isSubclassOf('Illuminate\Support\Facades\Facade')) {
                /** @var DB $real */
                $obj = $real::getFacadeRoot();
                $ref = new ReflectionObject($obj);
            }

            if ($ref->isAbstract()) {
                continue;
            }


//            $phpArr[$alias] .= "use {$ref->getName()} as _CLASS_;\n";
            $phpArr[$alias] .= "class $alias {\n";


            // 常量
            foreach ($ref->getConstants() as $const => $constVal) {
                $key = $const;
                $phpArr[$alias] .= "const $key = _CLASS_::{$key};\n";
            }

            // 属性
            foreach ($ref->getProperties(ReflectionProperty::IS_PUBLIC) as $prop) {
                $key = $prop->name;
                $phpArr[$alias] .= "public \$$key ;\n";
            }


            // 方法
            foreach ($ref->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                if (in_array($method->name, $jumpFunc)) {
                    continue;
                }
                // 备注
                $doc = $method->getDocComment();
                $doc = preg_replace("/ +\*/", " *", $doc);


                // 获取 return
                preg_match('/return +(.*)/', $doc, $matches);
                if (isset($matches[1])) {
                    $arr = explode('|', $matches[1]);
                    $returnArr = [];
                    foreach ($arr as $v) {
                        if (strtolower($v) === '$this') {
                            // return $this 替换成 $this|static
                            $returnArr[] = 'static';
                            $returnArr[] = $v;
                        } elseif ($v === '\\' . $ref->getName()) {
                            // return 自身 替换成 static
                            $returnArr[] = 'static';
                        } elseif ($v === '\Illuminate\Database\Eloquent\Model') {
                            $returnArr[] = 'static';
                            $returnArr[] = $v;
                        } else {
                            $returnArr[] = $v;
                        }
                    }
                    $returnArr = array_unique($returnArr);
                    $doc = preg_replace('/return .*/', 'return ' . implode('|', $returnArr), $doc);
                }

                $phpArr[$alias] .= $doc . "\n";

                if (!in_array($method->name, $notAllowStatic)) {
                    $phpArr[$alias] .= 'static ';
                }

                $phpArr[$alias] .= "public function {$method->name} (";

                $paramsArr = [];
                foreach ($method->getParameters() as $param) {
                    $paramTypeHint = $param->getType();
                    $paramName = $param->getName();
                    $paramVal = $param->isDefaultValueAvailable() ?
                        "=" . str_replace("\n", '', var_export($param->getDefaultValue(), true))
                        : '';
                    $paramsArr["\$$paramName"] = "$paramTypeHint \$$paramName $paramVal";
                }
                $phpArr[$alias] .= implode(',', $paramsArr) . ") ";

                if ($method->hasReturnType()) {
                    $phpArr[$alias] .= " : " . $method->getReturnType();
                }

                $phpArr[$alias] .= " \n{\n ";


                // func_get_args
                $fileContent = file_get_contents($method->getFileName());
                $fileContent = explode("\n", $fileContent);
                $funcContent = array_slice($fileContent, $method->getStartLine(), $method->getEndLine() - $method->getStartLine() - 1);
                $funcContent = implode("\n", $funcContent);

                if (strstr($funcContent, 'func_get_arg') !== false) {
                    $phpArr[$alias] .= "\t func_get_args();\n";
                }

                $phpArr[$alias] .= "\t return (new {$ref->getName()})->{$method->name}(" . implode(',', array_keys($paramsArr)) . ");\n}\n";
            }

            $phpArr[$alias] .= "\n}\n";
        }

        foreach ($phpArr as $class => $code) {
            $file = base_path("atom/_" . $class . ".php");
            file_put_contents($file, $code);
        }

    }
}
