<?php

namespace App\Enums\Models\Photo;

use App\Enums\HasAll;

enum Extension: string
{
    use HasAll;

    case PNG = 'png';
    case JPG = 'jpg';
    case JPEG = 'jpeg';
    case WEBP = 'webp';
    case SVG = 'svg';
}
