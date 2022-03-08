<?php

namespace App\Services;

use function config;

use Throwable;

use App\Modules\Response;

use Illuminate\Validation\ValidationException;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

use Illuminate\Foundation\Exceptions\Handler;

final class Exceptions extends Handler
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $throwable) {
            if ($throwable instanceof MethodNotAllowedHttpException) {
                return $this->response()->sendMethodNotAllowed();
            }

            if ($throwable instanceof AccessDeniedHttpException) {
                return $this->response()->sendForbidden();
            }

            if ($throwable instanceof NotFoundHttpException) {
                return $this->response()->sendNotFound();
            }

            if ($throwable instanceof ValidationException) {
                return $this->response()->sendUnprocessableEntity([
                    'message' => $throwable->errors(),
                ]);
            }

            $isProduction = config('app.env') === 'production';

            if ($isProduction) {
                return $this->response()->sendInternalServerError();
            }

            return $this->response()->sendInternalServerError([
                'message' => $throwable->getMessage(),
                'file' => $throwable->getFile(),
                'line' => $throwable->getLine(),
                'trace' => $throwable->getTrace(),
            ]);
        });
    }

    /**
     * @return Response
     */
    protected function response(): Response
    {
        return Response::getInstance();
    }
}
