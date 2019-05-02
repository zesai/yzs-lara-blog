<?php

//将当前请求的路由名称转换为 CSS 类名称
function route_class()
{
    str_replace('.','-',\Illuminate\Support\Facades\Route::currentRouteName());
}