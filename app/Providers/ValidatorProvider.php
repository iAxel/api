<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerValidators();
    }

    /**
     * @return void
     */
    protected function registerValidators(): void
    {
        //
    }
}
