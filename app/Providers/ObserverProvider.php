<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerObservers();
    }

    /**
     * @return void
     */
    protected function registerObservers(): void
    {
        //
    }
}
