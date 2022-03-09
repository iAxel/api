<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

final class BlueprintProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerMacros();
    }

    /**
     * @return void
     */
    protected function registerMacros(): void
    {
        Blueprint::macro('uid', function (string $column) {
            $this->addColumn('uuid', $column);
        });

        Blueprint::macro('gis', function (string $column, int $srid) {
            $this->addColumn('geometry', $column, [
                'srid' => $srid,
            ]);

            $this->addColumn('jsonb', "{$column}_json")->virtualAs("ST_AsGeoJSON($column)");
        });
    }
}
