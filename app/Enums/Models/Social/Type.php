<?php

namespace App\Enums\Models\Social;

use App\Enums\HasAll;

enum Type: string
{
    use HasAll;

    case GOOGLE = 'google';
    case FACEBOOK = 'facebook';
    case TELEGRAM = 'telegram';
}
