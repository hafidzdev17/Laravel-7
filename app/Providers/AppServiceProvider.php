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
        $this->app->singleton('markdown', function () {
            return $this->markdown;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('apa itu laravel?', function () {
            return 'Laravel adalah framework Laravel paling keren dan  elegan.';
        });
    }
}
