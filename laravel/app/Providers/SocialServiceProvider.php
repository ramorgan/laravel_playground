<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitter::class, function () {
            //@todo: api-key should be a value pulled from the .env file
            return new Twitter(config('services.twitter.secret'));
        });
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
