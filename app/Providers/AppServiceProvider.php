<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
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
        View::share('slideshow_photos', scandir(public_path('storage/slideshow')));
        // View::composer('dashboard', function($view){
        //     $view->with('slideshow_photos', scandir(public_path('storage/slideshow')));
        // });
    }
}
