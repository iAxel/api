<?php

namespace App\Providers;

use App\Models\Ban;
use App\Models\Role;
use App\Models\User;
use App\Models\Photo;
use App\Models\Social;
use App\Models\Report;
use App\Models\Session;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

final class RelationProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerEnforceMorphMap();
    }

    /**
     * @return void
     */
    protected function registerEnforceMorphMap(): void
    {
        Relation::enforceMorphMap([
            'role' => Role::class,
            'user' => User::class,
            'session' => Session::class,
            'social' => Social::class,
            'ban' => Ban::class,
            'report' => Report::class,
            'photo' => Photo::class,
        ]);
    }
}
