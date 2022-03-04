<?php

namespace App\Http\Helpers;

use function count;

trait HasGuards
{
    /**
     * @param array $guards
     *
     * @return bool
     */
    protected function hasGuards(array $guards): bool
    {
        return count($guards) > 0;
    }
}
