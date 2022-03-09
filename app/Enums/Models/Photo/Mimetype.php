<?php

namespace App\Enums\Models\Photo;

use App\Enums\HasAll;

enum Mimetype: string
{
    use HasAll;

    case PNG = 'image/png';
    case JPG = 'image/jpg';
    case JPEG = 'image/jpeg';
    case WEBP = 'image/webp';
    case SVG = 'image/svg';
    case SVG_XML = 'image/svg+xml';
}
