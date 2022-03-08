<?php

namespace App\Models\Enums\Helpers;

trait HasAll
{
    /**
     * @return array
     */
    public static function all(): array
    {
        $all = [];

        foreach (self::cases() as $case) {
            $all[] = $case->value;
        }

        return $all;
    }
}
