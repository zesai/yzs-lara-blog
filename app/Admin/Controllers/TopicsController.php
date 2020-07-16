<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TopicsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章';


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

        $grid->model()->with(['category','user']);

        $grid->column('id', __('Id'));
        $grid->column('title', '标题')->display(function ($title) {
            return "<a href='". $this->link() ."' target='_blank'>$title</a>";
        })->width(200);

        $grid->column('excerpt', '摘要')->display(function($text) {
            return Str::limit($text, 150, '...');
        })->width(200);

        $grid->cover('封面图')->image(150,100);

        $grid->column('user.name', __('作者'))->display(function ($name) {
            return "<span class='label label-success'>$name</span>";
        });

        $grid->column('category.name', __('分类'))->display(function ($name) {
            return "<span class='label label-default'>$name</span>";
        });
        $grid->column('tags', __('Tags name'))->display(function ($tags) {
            $tags = array_map(function ($tag){
                return "<span class='label label-success'>{$tag['name']}</span>";
            },$tags);
            return join('<br />', $tags);
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

        $form->text('title', __('标题'));
        $form->select('category_id', __('分类'))
            ->options(function ($id) {
                $category = Category::find($id);
                if ($category) {
                    return [$category->id => $category->full_name];
                }
            })
            ->ajax('/admin/api/categories?is_directory=0');
        $form->multipleSelect('tags', __('Tags name'))
            ->options(Tag::all()->pluck('name', 'id'));
        $form->image('cover', __('封面图'))
            ->move(function () {
                if (!empty(env('QINIUYUN'))) {
                    return "/images/topics/" . date('Ym/d',time());
                }
            }, function ($file) {
                return '1_' . time() . '_' . Str::random(10) . '.' . $file->guessExtension();
            });
        $form->editor('body', __('文章内容'));
        $form->hidden('user_id')->default(1);


        return $form;
    }

}
