<?php

namespace App\Admin\Controllers;

use App\Models\Reply;
use App\Models\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RepliesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '评论管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reply);

        $grid->column('id', __('Id'));
        $grid->column('topic_id', __('Topic name'));
        $grid->column('user_id', __('User name'));
        $grid->column('content', __('Reply content'));
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
        $show = new Show(Reply::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('topic_id', __('Topic name'));
        $show->field('user_id', __('User name'));
        $show->field('content', __('Reply content'));
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
        $form = new Form(new Reply);

        $form->select('topic_id', __('Topic name'))
            ->options(Topic::all()->pluck('title', 'id'));
        $form->number('user_id', __('User name'));
        $form->textarea('content', __('Reply content'));

        return $form;
    }
}
