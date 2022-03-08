<?php

namespace App\Http;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

final class TrustHosts extends Middleware
{
    /**
     * @return array
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
