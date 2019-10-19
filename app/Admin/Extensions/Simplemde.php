<?php


namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Simplemde extends Field
{
    protected $view = 'admin::form.editor';

    protected static $css = [
        '/simplemde/dist/simplemde.min.css',
    ];

    protected static $js = [
        '/simplemde/dist/simplemde.min.js',
        '/markdown/js/inline-attachment.min.js',
        '/markdown/js/codemirror-4.inline-attachment.min.js'
    ];

    public function render()
    {

        $this->script = <<<EOT

            var simplemde = new SimpleMDE({
               autofocus: true,
                autosave: {
                    enabled: true,
                    delay: 5000,
                    unique_id: "editor01",
                },
                spellChecker: false,
            });
            
            // 在已有的 simplemde 对象的基础上再增加图片拖拽
            inlineAttachment.editors.codemirror4.attach(simplemde.codemirror, {
                // 传递 CSRF token
                extraHeaders: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },

                // 设置图片上传的地址
                uploadUrl: "/upload_image",
                uploadFieldName: 'upload_file',     //上传的文件名
                jsonFieldName: 'file_path',              //返回结果中图片地址对应的字段名称
                // 上传之后的处理
                onFileUploadResponse: function(xhr) {
                    var result = JSON.parse(xhr.responseText);
                        filename = result.file_path;
                    if (result && filename) {
                        var newValue;
                        if (typeof this.settings.urlText === 'function') {
                            newValue = this.settings.urlText.call(this, filename, result);
                        } else {
                            newValue = this.settings.urlText.replace(this.filenameTag, filename);
                        }
                        var text = this.editor.getValue().replace(this.lastValue, newValue);
                        this.editor.setValue(text);
                        this.settings.onFileUploaded.call(this, filename);
                    }
                    return false;
                }
            });

EOT;

        return parent::render();
    }
}
