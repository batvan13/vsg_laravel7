<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Profile;

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
        view()->composer('Frontend.layouts.master',function ($view){
                $view->with('profile',Profile::find(1));
               });
    }
}
