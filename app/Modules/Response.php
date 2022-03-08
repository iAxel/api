<?php

namespace App\Modules;

use Illuminate\Http\JsonResponse;
use App\Modules\Enums\ResponseStatus;

final class Response
{
    /**
     * @var self|null
     */
    protected static ?self $instance = null;

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendOK(mixed $result = null): JsonResponse
    {
        return $this->sendSuccess(ResponseStatus::OK, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendCreated(mixed $result = null): JsonResponse
    {
        return $this->sendSuccess(ResponseStatus::CREATED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendBadRequest(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::BAD_REQUEST, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendUnauthorized(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::UNAUTHORIZED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendPaymentRequired(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::PAYMENT_REQUIRED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendForbidden(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::FORBIDDEN, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendNotFound(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::NOT_FOUND, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendMethodNotAllowed(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::METHOD_NOT_ALLOWED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendNotAcceptable(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::NOT_ACCEPTABLE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendProxyAuthenticationRequired(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::PROXY_AUTHENTICATION_REQUIRED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendRequestTimeout(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::REQUEST_TIMEOUT, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendConflict(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::CONFLICT, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendGone(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::GONE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendLengthRequired(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::LENGTH_REQUIRED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendPreconditionFailed(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::PRECONDITION_FAILED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendRequestEntityTooLarge(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::REQUEST_ENTITY_TOO_LARGE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendRequestURITooLong(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::REQUEST_URI_TOO_LONG, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendUnsupportedMediaType(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::UNSUPPORTED_MEDIA_TYPE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendRequestedRangeNotSatisfiable(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::REQUESTED_RANGE_NOT_SATISFIABLE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendExpectationFailed(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::EXPECTATION_FAILED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendIAmATeapot(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::I_AM_A_TEAPOT, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendMisdirectedRequest(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::MISDIRECTED_REQUEST, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendUnprocessableEntity(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::UNPROCESSABLE_ENTITY, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendLocked(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::LOCKED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendFailedDependency(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::FAILED_DEPENDENCY, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendTooEarly(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::TOO_EARLY, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendUpgradeRequired(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::UPGRADE_REQUIRED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendPreconditionRequired(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::PRECONDITION_REQUIRED, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendTooManyRequest(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::TOO_MANY_REQUESTS, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendRequestHeaderFieldsTooLarge(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::REQUEST_HEADER_FIELDS_TOO_LARGE, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendUnavailableForLegalReasons(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::UNAVAILABLE_FOR_LEGAL_REASONS, $result);
    }

    /**
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    public function sendInternalServerError(mixed $result = null): JsonResponse
    {
        return $this->sendNotSuccess(ResponseStatus::INTERNAL_SERVER_ERROR, $result);
    }

    /**
     * @param ResponseStatus $status
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    protected function sendSuccess(ResponseStatus $status, mixed $result = null): JsonResponse
    {
        if (!$result) {
            $result = [
                'message' => $status->message(),
            ];
        }

        return new JsonResponse(['success' => true, 'result' => $result], $status->value);
    }

    /**
     * @param ResponseStatus $status
     * @param mixed|null $result
     *
     * @return JsonResponse
     */
    protected function sendNotSuccess(ResponseStatus $status, mixed $result = null): JsonResponse
    {
        if (!$result) {
            $result = [
                'message' => $status->message(),
            ];
        }

        return new JsonResponse(['success' => false, 'result' => $result], $status->value);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
