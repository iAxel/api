<?php

namespace App\Models\Enums;

enum BanReason: string
{
    use Helpers\HasAll;

    case SPAM = 'Spam';
    case OFFENSIVE = 'Offensive';
    case INAPPROPRIATE = 'Inappropriate';
    case OTHER = 'Other';
}
