<?php

use Illuminate\Routing\Router;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    //文章
    $router->resource('topics', TopicsController::class);
    //友情链接
    $router->resource('friend_links', FriendLinksController::class);
    //分类
    $router->resource('categories', CategoriesController::class);
    $router->get('api/categories', 'CategoriesController@apiIndex');

    //标签
    $router->resource('tags', TagsController::class);

    //推荐文章
    $router->resource('links', LinksController::class);

    //评论
    $router->resource('replies', RepliesController::class);

});
