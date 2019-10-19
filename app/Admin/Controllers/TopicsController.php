<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class TopicsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Topic';


    public function index(Content $content)
    {
        return $content
            ->title('文章管理')
            ->description(' ')
            ->row($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Topic);

        $grid->disableExport();
        $grid->disableColumnSelector();

        $grid->actions(function ($actions) {
            // 去掉查看
            $actions->disableView();
        });


        $grid->column('id', __('Id'));
        $grid->column('title', '标题')->display(function ($title) {
            return "<a href='". $this->link() ."' target='_blank'>$title</a>";
        })->width(200);

        $grid->column('excerpt', '摘要')->display(function($text) {
            return str_limit($text, 150, '...');
        })->width(200);

        $grid->cover('封面图')->image(150,100);

        $grid->column('user.name', __('作者'))->display(function ($name) {
            return "<span class='label label-success'>$name</span>";
        });

        $grid->column('category.name', __('分类'))->display(function ($name) {
            return "<span class='label label-default'>$name</span>";
        });
        $grid->column('reply_count', __('回复数'));
        $grid->column('view_count', __('查看数'));
        $grid->column('created_at', __('创建时间'));
//        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Topic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('body', __('Body'));
        $show->field('user_id', __('User id'));
        $show->field('category_id', __('Category id'));
        $show->field('reply_count', __('Reply count'));
        $show->field('view_count', __('View count'));
        $show->field('last_reply_user_id', __('Last reply user id'));
        $show->field('order', __('Order'));
        $show->field('excerpt', __('Excerpt'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new Topic);

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

        $form->text('title', __('标题'));
        $form->select('category_id', __('分类'))
            ->options((new Category())->getNameArray());
        $form->image('cover', __('封面图'))
            ->move(function () {
                if (!empty(env('QINIUYUN'))) {
                    return "/images/topics/" . date('Ym/d',time());
                }
            }, function ($file) {
                return '1_' . time() . '_' . str_random(10) . '.' . $file->guessExtension();
            });
        $form->editor('body', __('文章内容'));
        $form->hidden('user_id')->default(1);

        return $form;
    }
}