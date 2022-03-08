<?php

namespace App\Models\Enums;

enum PhotoMimetype: string
{
    use Helpers\HasAll;

    case PNG = 'image/png';
    case JPG = 'image/jpg';
    case JPEG = 'image/jpeg';
    case WEBP = 'image/webp';
    case SVG = 'image/svg';
    case SVG_XML = 'image/svg+xml';
}
