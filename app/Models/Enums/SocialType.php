<?php

namespace App\Models\Enums;

enum SocialType: string
{
    use Helpers\HasAll;

    case GOOGLE = 'google';
    case FACEBOOK = 'facebook';
    case TELEGRAM = 'telegram';
}
