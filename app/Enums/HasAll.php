<?php

namespace App\Enums;

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
