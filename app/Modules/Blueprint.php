<?php

namespace App\Modules;

use Illuminate\Database\Schema\Blueprint as Module;

class Blueprint extends Module
{
    /**
     * @param string $column
     *
     * @return void
     */
    public function uid(string $column): void
    {
        $this->char($column, 36);
    }

    /**
     * @param string $column
     * @param int $srid
     *
     * @return void
     */
    public function gis(string $column, int $srid): void
    {
        $this->addColumn('geometry', $column, [
            'srid' => $srid,
        ]);

        $this->jsonb("{$column}_json")->virtualAs("ST_AsGeoJSON($column)");
    }
}
