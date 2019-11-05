<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class CategoriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章类目';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->column('id', __('Id'));
        $grid->column('name', __('名称'));
        $grid->column('description', __('描述'));
        $grid->column('post_count', __('文章数量'));
        $grid->column('parent_id', __('父类目'));
        $grid->column('level', __('层级'));
        $grid->column('is_directory', __('是否目录'))->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->column('path', __('类目路径'));

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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('名称'));
        $show->field('description', __('描述'));
        $show->field('post_count', __('文章数量'));
        $show->field('parent_id', __('父类目'));
        $show->field('level', __('层级'));
//        $show->field('is_directory', __('是否目录'))->display(function ($value) {
//            return $value ? '是' : '否';
//        });
        $show->field('path', __('类目路径'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);

        $form->text('name', __('名称'));
        $form->textarea('description', __('描述'));

        // 如果是编辑的情况
        if ($form->isEditing()) {

            // 不允许用户修改『是否目录』和『父类目』字段的值
            // 用 display() 方法来展示值，with() 方法接受一个匿名函数，会把字段值传给匿名函数并把返回值展示出来
            $form->display('is_directory', __('是否目录'))->with(function ($value){
                return $value ? '是' : '否';
            });
            $form->display('parent.name', __('父类目'));

        } else {

            $form->radio('is_directory','是否目录')
                ->options(['1' => '是', '0' => '否'])
                ->default('0')
                ->rules('required');
            // 定义一个名为父类目的下拉框
            $form->select('parent_id','父类目')
                ->ajax('/admin/api/categories');

        }

        return $form;
    }

    public function apiIndex(Request $request)
    {
        $search = $request->input('q');
        $result = Category::query()
            ->where('is_directory', boolval($request->input('is_directory',true))) // 由于这里选择的是父类目，因此需要限定 is_directory 为 true
            ->where('name', 'like', '%'. $search .'%')
            ->paginate();

        // 把查询出来的结果重新组装成 Laravel-Admin 需要的格式

        $result->setCollection($result->getCollection()->map(function (Category $category) {
            return ['id' => $category->id, 'text' => $category->full_name];
        }));

        return $result;
    }
}
