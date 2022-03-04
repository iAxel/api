<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContractProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected array $services = [
        //
    ];

    /**
     * @var array
     */
    protected array $repositories = [
        //
    ];

    /**
     * @return void
     */
    public function register(): void
    {
        $this->registerServices();
        $this->registerRepositories();
    }

    /**
     * @return void
     */
    protected function registerServices(): void
    {
        foreach ($this->services as $concrete => $abstract) {
            $this->app->bind($abstract, $concrete);
        }
    }

    /**
     * @return void
     */
    protected function registerRepositories(): void
    {
        foreach ($this->repositories as $concrete => $abstract) {
            $this->app->bind($abstract, $concrete);
        }
    }
}
