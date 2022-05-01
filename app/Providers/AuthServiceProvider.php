<?php

namespace App\Providers;

use Gate;
use App\Models\DataType;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Log;
use TCG\Voyager\Policies\BasePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::before(function ($user, $ability) {
            if ($user->hasRole('developer')) {
                return true;
            }
        });

        $this->loadAuth();

        $this->registerPolicies();
    }

    public function loadAuth()
    {
        try {
            $dataType = DataType::query();
            $dataTypes = $dataType->select('policy_name', 'model_name')->get();

            foreach ($dataTypes as $dataType) {
                $policyClass = BasePolicy::class;
                if (isset($dataType->policy_name) && $dataType->policy_name !== ''
                    && class_exists($dataType->policy_name)) {
                    $policyClass = $dataType->policy_name;
                }

                $this->policies[$dataType->model_name] = $policyClass;
            }

        } catch (\PDOException $e) {
            Log::info('No database connection yet in VoyagerServiceProvider loadAuth(). No worries, this is not a problem!');
        }
    }
}
