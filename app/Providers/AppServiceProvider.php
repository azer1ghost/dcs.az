<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

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
    }

    public function boot()
    {
        Paginator::useBootstrap();

        Blade::componentNamespace('App\\View\\Components\\Bread\\Input', 'input');

        Voyager::addAction(\App\Actions\Sessions::class);
        Voyager::addAction(\App\Actions\Students::class);
        Voyager::addAction(\App\Actions\Certificate::class);
        Voyager::addAction(\App\Actions\InfoCertificate::class);
        Voyager::useModel('DataType', \App\Models\DataType::class);
        Voyager::useModel('DataRow', \App\Models\DataRow::class);
    }

}
