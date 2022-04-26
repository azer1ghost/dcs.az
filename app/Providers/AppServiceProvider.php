<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RuleServiceProvider::class);
        $this->app->register(VoyagerServiceProvider::class);
    }

    /**
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Blade::componentNamespace('App\\View\\Components\\Bread\\Input', 'input');
    }

}
