<?php

//将当前请求的路由名称转换为 CSS 类名称
function route_class()
{
    return str_replace('.','-',\Illuminate\Support\Facades\Route::currentRouteName());
}
//判断分类路由是否选中状态
function category_nav_active($category_id)
{
    return active_class( (if_route('categories.show')) && if_route_param('category',$category_id) );
}

//制作文章摘录
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}