<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        /**
         * Required for (Spatie) Laravel Permissions package.
         * 
         * https://spatie.be/docs/laravel-permission/v5/prerequisites#content-schema-limitation-in-mysql
         */
        Schema::defaultStringLength(125);
    }
}
