<?php

namespace App\Enums\Models\Report;

use App\Enums\HasAll;

enum Able: string
{
    use HasAll;

    case USER = 'user';
}
