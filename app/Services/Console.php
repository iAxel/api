<?php

namespace App\Services;

use function app_path;

use Illuminate\Foundation\Console\Kernel;

final class Console extends Kernel
{
    /**
     * @return void
     */
    protected function commands(): void
    {
        $this->load(
            app_path('Console'),
        );
    }
}
