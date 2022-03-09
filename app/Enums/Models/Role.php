<?php

namespace App\Enums\Models;

use App\Enums\HasAll;

enum Role: int
{
    use HasAll;

    case ADMINISTRATOR = 1;
    case MODERATOR = 2;
    case USER = 3;
}
