<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerRelationEnforceMorphMap();
    }

    /**
     * @return void
     */
    protected function registerRelationEnforceMorphMap(): void
    {
        Relation::enforceMorphMap([
            //
        ]);
    }
}
