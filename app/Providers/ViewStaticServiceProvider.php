<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewStaticServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.header', 'App\Http\Composers\StaticComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
