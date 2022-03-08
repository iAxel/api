<?php

namespace App\Models\Enums;

enum Photoable: string
{
    use Helpers\HasAll;

    case ROLE = 'role';
    case USER = 'user';
}
