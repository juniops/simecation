<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Rollbar\Rollbar;
use \Rollbar\Payload\Level;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Rollbar::init(
            array(
                'access_token' => '9e8cf43097b3483c94b6617e4905a32b',
                'environment' => 'production'
            )
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
