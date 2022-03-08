<?php

namespace App\Models\Enums;

enum Role: int
{
    use Helpers\HasAll;

    case ADMINISTRATOR = 1;
    case MODERATOR = 2;
    case USER = 3;
}
