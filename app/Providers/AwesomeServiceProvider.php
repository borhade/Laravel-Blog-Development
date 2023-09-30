<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AwesomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Services\AwesomeService","App\Services\AwesomeServiceInteface");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
