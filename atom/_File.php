<?php 
class File {
/**
 * Determine if a file or directory exists.
 *
 * @param  string  $path
 * @return bool
 */
static public function exists ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->exists($path);
}
/**
 * Get the contents of a file.
 *
 * @param  string  $path
 * @param  bool  $lock
 * @return string
 *
 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
static public function get ( $path , $lock =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->get($path,$lock);
}
/**
 * Get contents of a file with shared access.
 *
 * @param  string  $path
 * @return string
 */
static public function sharedGet ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->sharedGet($path);
}
/**
 * Get the returned value of a file.
 *
 * @param  string  $path
 * @return mixed
 *
 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
static public function getRequire ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->getRequire($path);
}
/**
 * Require the given file once.
 *
 * @param  string  $file
 * @return mixed
 */
static public function requireOnce ( $file )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->requireOnce($file);
}
/**
 * Get the MD5 hash of the file at the given path.
 *
 * @param  string  $path
 * @return string
 */
static public function hash ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->hash($path);
}
/**
 * Write the contents of a file.
 *
 * @param  string  $path
 * @param  string  $contents
 * @param  bool  $lock
 * @return int|bool
 */
static public function put ( $path , $contents , $lock =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->put($path,$contents,$lock);
}
/**
 * Write the contents of a file, replacing it atomically if it already exists.
 *
 * @param  string  $path
 * @param  string  $content
 * @return void
 */
static public function replace ( $path , $content )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->replace($path,$content);
}
/**
 * Prepend to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @return int
 */
static public function prepend ( $path , $data )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->prepend($path,$data);
}
/**
 * Append to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @return int
 */
static public function append ( $path , $data )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->append($path,$data);
}
/**
 * Get or set UNIX mode of a file or directory.
 *
 * @param  string  $path
 * @param  int|null  $mode
 * @return mixed
 */
static public function chmod ( $path , $mode =NULL)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->chmod($path,$mode);
}
/**
 * Delete the file at a given path.
 *
 * @param  string|array  $paths
 * @return bool
 */
static public function delete ( $paths )  
{
 	 func_get_args();
	 return (new Illuminate\Filesystem\Filesystem)->delete($paths);
}
/**
 * Move a file to a new location.
 *
 * @param  string  $path
 * @param  string  $target
 * @return bool
 */
static public function move ( $path , $target )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->move($path,$target);
}
/**
 * Copy a file to a new location.
 *
 * @param  string  $path
 * @param  string  $target
 * @return bool
 */
static public function copy ( $path , $target )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->copy($path,$target);
}
/**
 * Create a hard link to the target file or directory.
 *
 * @param  string  $target
 * @param  string  $link
 * @return void
 */
static public function link ( $target , $link )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->link($target,$link);
}
/**
 * Extract the file name from a file path.
 *
 * @param  string  $path
 * @return string
 */
static public function name ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->name($path);
}
/**
 * Extract the trailing name component from a file path.
 *
 * @param  string  $path
 * @return string
 */
static public function basename ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->basename($path);
}
/**
 * Extract the parent directory from a file path.
 *
 * @param  string  $path
 * @return string
 */
static public function dirname ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->dirname($path);
}
/**
 * Extract the file extension from a file path.
 *
 * @param  string  $path
 * @return string
 */
static public function extension ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->extension($path);
}
/**
 * Get the file type of a given file.
 *
 * @param  string  $path
 * @return string
 */
static public function type ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->type($path);
}
/**
 * Get the mime-type of a given file.
 *
 * @param  string  $path
 * @return string|false
 */
static public function mimeType ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->mimeType($path);
}
/**
 * Get the file size of a given file.
 *
 * @param  string  $path
 * @return int
 */
static public function size ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->size($path);
}
/**
 * Get the file's last modification time.
 *
 * @param  string  $path
 * @return int
 */
static public function lastModified ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->lastModified($path);
}
/**
 * Determine if the given path is a directory.
 *
 * @param  string  $directory
 * @return bool
 */
static public function isDirectory ( $directory )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->isDirectory($directory);
}
/**
 * Determine if the given path is readable.
 *
 * @param  string  $path
 * @return bool
 */
static public function isReadable ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->isReadable($path);
}
/**
 * Determine if the given path is writable.
 *
 * @param  string  $path
 * @return bool
 */
static public function isWritable ( $path )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->isWritable($path);
}
/**
 * Determine if the given path is a file.
 *
 * @param  string  $file
 * @return bool
 */
static public function isFile ( $file )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->isFile($file);
}
/**
 * Find path names matching a given pattern.
 *
 * @param  string  $pattern
 * @param  int     $flags
 * @return array
 */
static public function glob ( $pattern , $flags =0)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->glob($pattern,$flags);
}
/**
 * Get an array of all files in a directory.
 *
 * @param  string  $directory
 * @param  bool  $hidden
 * @return \Symfony\Component\Finder\SplFileInfo[]
 */
static public function files ( $directory , $hidden =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->files($directory,$hidden);
}
/**
 * Get all of the files from the given directory (recursive).
 *
 * @param  string  $directory
 * @param  bool  $hidden
 * @return \Symfony\Component\Finder\SplFileInfo[]
 */
static public function allFiles ( $directory , $hidden =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->allFiles($directory,$hidden);
}
/**
 * Get all of the directories within a given directory.
 *
 * @param  string  $directory
 * @return array
 */
static public function directories ( $directory )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->directories($directory);
}
/**
 * Create a directory.
 *
 * @param  string  $path
 * @param  int     $mode
 * @param  bool    $recursive
 * @param  bool    $force
 * @return bool
 */
static public function makeDirectory ( $path , $mode =493, $recursive =false, $force =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->makeDirectory($path,$mode,$recursive,$force);
}
/**
 * Move a directory.
 *
 * @param  string  $from
 * @param  string  $to
 * @param  bool  $overwrite
 * @return bool
 */
static public function moveDirectory ( $from , $to , $overwrite =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->moveDirectory($from,$to,$overwrite);
}
/**
 * Copy a directory from one location to another.
 *
 * @param  string  $directory
 * @param  string  $destination
 * @param  int|null  $options
 * @return bool
 */
static public function copyDirectory ( $directory , $destination , $options =NULL)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->copyDirectory($directory,$destination,$options);
}
/**
 * Recursively delete a directory.
 *
 * The directory itself may be optionally preserved.
 *
 * @param  string  $directory
 * @param  bool    $preserve
 * @return bool
 */
static public function deleteDirectory ( $directory , $preserve =false)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->deleteDirectory($directory,$preserve);
}
/**
 * Remove all of the directories within a given directory.
 *
 * @param  string  $directory
 * @return bool
 */
static public function deleteDirectories ( $directory )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->deleteDirectories($directory);
}
/**
 * Empty the specified directory of all files and folders.
 *
 * @param  string  $directory
 * @return bool
 */
static public function cleanDirectory ( $directory )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->cleanDirectory($directory);
}
/**
 * Register a custom macro.
 *
 * @param  string $name
 * @param  object|callable  $macro
 *
 * @return void
 */
static public function macro ( $name , $macro )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->macro($name,$macro);
}
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @param  bool  $replace
 * @return void
 *
 * @throws \ReflectionException
 */
static public function mixin ( $mixin , $replace =true)  
{
 	 return (new Illuminate\Filesystem\Filesystem)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->hasMacro($name);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->__callStatic($method,$parameters);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Filesystem\Filesystem)->__call($method,$parameters);
}

}
