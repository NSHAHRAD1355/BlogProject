<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Post;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {

        $filename = \App\Post::get()->last() ;
        View::share('lastPostedBlog', $filename['title']);
        View::composer('main', function ($view) {
            return $view->with('count', \App\Post::count());
        });

//        View::composer('main', function($filename){
//            return $filename->with('lastpostedblog',\App\Post::get()->last());
//        });
    }
}
