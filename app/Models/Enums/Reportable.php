<?php

namespace App\Models\Enums;

enum Reportable: string
{
    use Helpers\HasAll;

    case USER = 'user';
}
