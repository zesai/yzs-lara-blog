<?php

namespace App\Admin\Controllers;

use App\Models\FriendLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FriendLinksController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '友情链接';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FriendLink);

        $grid->column('id', __('Id'));

        $grid->column('name', __('名称'));

        $grid->column('url', __('网站地址'));

        $grid->column('avatar', __('头像链接'))
            ->image('',50,50);

        $grid->column('description', '描述');

        $states = [
            'on'  => ['value' => 1, 'text' => '通过', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '未通过', 'color' => 'danger'],
        ];
        $grid->column('audit', '审核')->switch($states);

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FriendLink::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('名称'));
        $show->field('url', __('网站地址'));
        $show->field('avatar', __('头像'));
        $show->field('description', __('详情'));
        $show->field('audit', __('审核'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FriendLink);

        $form->text('name', '名称')
            ->creationRules(['required', "unique:friend_links"])
            ->updateRules(['required', "unique:friend_links,name,{{id}}"]);

        $form->url('avatar', '头像链接')
            ->rules('required');

        $form->url('url', '网站地址')
            ->creationRules(['required', "unique:friend_links"])
            ->updateRules(['required', "unique:friend_links,url,{{id}}"]);

        $form->textarea('description', '描述')
            ->help('个性签名，网站简介等...');

        $states = [
            'on'  => ['value' => 1, 'text' => '通过', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '未通过', 'color' => 'danger'],
        ];

        $form->switch('audit', '审核')
            ->states($states);

        $form->saving(function ($form) {

           switch ($form->audit) {
               case 'on':
                   $form->audit = '1';
                   break;
               case 'off':
                   $form->audit = '0';
           }

        });
        return $form;
    }
}
