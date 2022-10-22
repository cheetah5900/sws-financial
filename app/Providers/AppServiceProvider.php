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
        $env = config('app.env');

        if (!in_array($env, ['production', 'staging', 'uat'])) {
            $url = $this->app['url'];
            $url->forceRootUrl(config('app.url'));
        }
    }
}
