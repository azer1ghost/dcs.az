<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class RuleServiceProvider extends ServiceProvider
{
    protected array $rules = [
        \App\Rules\Phone::class,
    ];

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
        $this->registerValidationRules();
    }


    private function registerValidationRules()
    {
        foreach($this->rules as $class) {
            $alias = (new $class)->__toString();
            if ($alias) {
                Validator::extend($alias, $class .'@passes');
            }
        }
    }
}
