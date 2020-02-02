<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Watson\Assistant;

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
        app()->singleton(Assistant::class, function ($app) {
            return new Assistant(config('watson.username'),config('watson.password'),config('watson.workspace'));
        });
    }
}
