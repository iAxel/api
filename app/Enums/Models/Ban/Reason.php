<?php

namespace App\Enums\Models\Ban;

use App\Enums\HasAll;

enum Reason: string
{
    use HasAll;

    case SPAM = 'Spam';
    case OFFENSIVE = 'Offensive';
    case INAPPROPRIATE = 'Inappropriate';
    case OTHER = 'Other';
}
