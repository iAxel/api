<?php

namespace App\Enums\Models\Photo;

use App\Enums\HasAll;

enum Able: string
{
    use HasAll;

    case ROLE = 'role';
    case USER = 'user';
}
