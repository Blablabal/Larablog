<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('layout.sidebar', function($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives','tags'));

        });
    }
}
