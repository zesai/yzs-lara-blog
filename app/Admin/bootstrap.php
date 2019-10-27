<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

//Encore\Admin\Form::forget(['map', 'editor']);

use App\Admin\Extensions\Simplemde;
use Encore\Admin\Form;
use Encore\Admin\Grid;

Form::extend('editor', Simplemde::class);

Grid::init(function (Grid $grid) {

    $grid->disableColumnSelector();

    $grid->disableExport();

    $grid->actions(function (Grid\Displayers\Actions $actions) {
        $actions->disableView();
    });
});

Form::init(function (Form $form) {

    $form->tools(function (Form\Tools $tools) {
        // 去掉`删除`按钮
        $tools->disableDelete();
        // 去掉`查看`按钮
        $tools->disableView();
    });

    $form->footer(function ($footer) {
        // 去掉`查看`checkbox
        $footer->disableViewCheck();
        // 去掉`继续编辑`checkbox
        $footer->disableEditingCheck();
        // 去掉`继续创建`checkbox
        $footer->disableCreatingCheck();
    });
});
