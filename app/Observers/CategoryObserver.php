<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    /**
     * @param Category $category
     * @author zesai
     * @date 2020/7/16
     */
    public function creating(Category $category)
    {
        //如果创建的是一个根目录
        if (is_null($category->parent_id)) {
            //将层级设为 0
            $category->level = 0;
            //将 path 设为 -
            $category->path = '-';
        } else {
            // 将层级设为父类目的层级 + 1
            $category->level = $category->parent->level + 1;
            // 将 path 值设为父类目的 path 追加父类目 ID 以及最后跟上一个 - 分隔符
            $category->path  = $category->parent->path.$category->parent_id.'-';
        }
    }
}
