<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class VoyagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::addAction(\App\Actions\Trainings::class);
        Voyager::addAction(\App\Actions\TrainingsEdit::class);
        Voyager::addAction(\App\Actions\Sessions::class);
        Voyager::addAction(\App\Actions\Students::class);
        Voyager::addAction(\App\Actions\Certificate::class);
        Voyager::addAction(\App\Actions\InfoCertificate::class);
        Voyager::useModel('Translation', \App\Models\Translation::class);
        Voyager::useModel('DataType', \App\Models\DataType::class);
        Voyager::useModel('DataRow', \App\Models\DataRow::class);
        Voyager::useModel('Permission', \App\Models\Permission::class);
        Voyager::useModel('Role', \App\Models\Role::class);
        Voyager::useModel('User', \App\Models\User::class);
        Voyager::useModel('Setting', \App\Models\Setting::class);
    }
}
