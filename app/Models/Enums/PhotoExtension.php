<?php

namespace App\Models\Enums;

enum PhotoExtension: string
{
    use Helpers\HasAll;

    case PNG = 'png';
    case JPG = 'jpg';
    case JPEG = 'jpeg';
    case WEBP = 'webp';
    case SVG = 'svg';
}
