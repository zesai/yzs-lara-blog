<?php

namespace App\Admin\Controllers;

use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TagsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Tag';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tag);
        $grid->model()->withTrashed();
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('slug', __('Slug'));
        $grid->column('keywords', __('Keywords'));
        $grid->column('description', __('Description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Tag::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('keywords', __('Keywords'));
        $show->field('description', __('Description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Tag);

        $form->text('name', __('Tag Name'));
        $form->text('keywords', __('Keywords'));
        $form->text('description', __('Description'));

        $form->deleting(function (){
            return response()->json([
                'status' => false,
                'message'=> '删除失败'
            ]);
        });

        return $form;
    }
}
