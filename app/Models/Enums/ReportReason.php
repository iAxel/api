<?php

namespace App\Models\Enums;

enum ReportReason: string
{
    use Helpers\HasAll;

    case SPAM = 'spam';
    case OFFENSIVE = 'offensive';
    case INAPPROPRIATE = 'inappropriate';
    case OTHER = 'other';
}
