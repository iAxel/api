<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected array $policies = [
        //
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerGuard();
        $this->registerPolicies();
    }

    /**
     * @return void
     */
    protected function registerGuard(): void
    {
        //
    }

    /**
     * @return void
     */
    protected function registerPolicies(): void
    {
        foreach ($this->policies as $model => $policy) {
            Gate::policy($model, $policy);
        }
    }
}
