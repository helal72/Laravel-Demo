<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class socialProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.layouts.footer', \App\Social\Socialcomposer::class);
    }
}
