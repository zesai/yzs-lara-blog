<?php

namespace App\Providers;

use App\Models\Link;
use App\Models\Reply;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //开发环境下使用 Sudosu
        if (app()->isLocal()) {
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    /*
	     * 模型观察器
	     */
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
		\App\Models\Link::observe(\App\Observers\LinkObserver::class);
		\App\Models\Category::observe(\App\Observers\CategoryObserver::class);
		\App\Models\Tag::observe(\App\Observers\TagObserver::class);

		/*
		 * 模版渲染
		 */
        // 当 Laravel 渲染 products.index 和 products.show 模板时，就会使用 CategoryTreeComposer 这个来注入类目树变量
        // 同时 Laravel 还支持通配符，例如 products.* 即代表当渲染 products 目录下的模板时都执行这个 ViewComposer
        \View::composer([
            'topics.index',
            'auth.*',
            'topics.show',
            'users.show',
            'users.edit',
        ], \App\Http\ViewComposers\CategoryTreeComposer::class);


        view()->composer(['topics._sidebar'],function ($view){
            $tags = Tag::select('id','name')->withCount('topics')->get();
            $active_users = (new User())->getActiveUsers();
            $links = (new Link())->getAllCached();
            $replies = Reply::with(['topic','user'])
                ->orderBy('created_at','desc')->limit(10)->get();
            $assgin = compact('tags','active_users', 'links', 'replies');
            $view->with($assgin);
        });

        /*
         * 日期
         */
        \Carbon\Carbon::setLocale('zh');
    }
}
