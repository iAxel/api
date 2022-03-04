<?php

namespace App\Http\Helpers;

use App\Modules\Response;

trait HasResponse
{
    /**
     * @return Response
     */
    protected function response(): Response
    {
        return Response::getInstance();
    }
}
