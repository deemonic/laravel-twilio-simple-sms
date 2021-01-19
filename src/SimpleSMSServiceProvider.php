<?php

namespace Deemonic;

use Deemonic\SMSSendingService;
use Illuminate\Support\ServiceProvider;

class SimpleSMSServiceProvider extends ServiceProvider
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
        $this->app->singleton('SMS', function($app){
            return new SMSSendingService();
        });
    }
}
