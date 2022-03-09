<?php

namespace App\Enums\Modules\Response;

enum Status: int
{
    case OK = 200;
    case CREATED = 201;
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case PAYMENT_REQUIRED = 402;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case NOT_ACCEPTABLE = 406;
    case PROXY_AUTHENTICATION_REQUIRED = 407;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case GONE = 410;
    case LENGTH_REQUIRED = 411;
    case PRECONDITION_FAILED = 412;
    case REQUEST_ENTITY_TOO_LARGE = 413;
    case REQUEST_URI_TOO_LONG = 414;
    case UNSUPPORTED_MEDIA_TYPE = 415;
    case REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    case EXPECTATION_FAILED = 417;
    case I_AM_A_TEAPOT = 418;
    case MISDIRECTED_REQUEST = 421;
    case UNPROCESSABLE_ENTITY = 422;
    case LOCKED = 423;
    case FAILED_DEPENDENCY = 424;
    case TOO_EARLY = 425;
    case UPGRADE_REQUIRED = 426;
    case PRECONDITION_REQUIRED = 428;
    case TOO_MANY_REQUESTS = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    case INTERNAL_SERVER_ERROR = 500;

    /**
     * @return string
     */
    public function message(): string
    {
        return match ($this) {
            self::OK => 'OK.',
            self::CREATED => 'Created.',
            self::BAD_REQUEST => 'Bad request.',
            self::UNAUTHORIZED => 'Unauthorized.',
            self::PAYMENT_REQUIRED => 'Payment required.',
            self::FORBIDDEN => 'Forbidden.',
            self::NOT_FOUND => 'Not found.',
            self::METHOD_NOT_ALLOWED => 'Method not allowed.',
            self::NOT_ACCEPTABLE => 'Not acceptable.',
            self::PROXY_AUTHENTICATION_REQUIRED => 'Proxy authentication required.',
            self::REQUEST_TIMEOUT => 'Request timeout.',
            self::CONFLICT => 'Conflict.',
            self::GONE => 'Gone.',
            self::LENGTH_REQUIRED => 'Length required.',
            self::PRECONDITION_FAILED => 'Precondition failed.',
            self::REQUEST_ENTITY_TOO_LARGE => 'Request entity too large.',
            self::REQUEST_URI_TOO_LONG => 'Request URI too long.',
            self::UNSUPPORTED_MEDIA_TYPE => 'Unsupported media type.',
            self::REQUESTED_RANGE_NOT_SATISFIABLE => 'Requested range not satisfiable.',
            self::EXPECTATION_FAILED => 'Expectation failed.',
            self::I_AM_A_TEAPOT => 'I\'m a teapot.',
            self::MISDIRECTED_REQUEST => 'Misdirected request.',
            self::UNPROCESSABLE_ENTITY => 'Unprocessable entity.',
            self::LOCKED => 'Locked.',
            self::FAILED_DEPENDENCY => 'Failed dependency.',
            self::TOO_EARLY => 'Too early.',
            self::UPGRADE_REQUIRED => 'Upgrade required.',
            self::PRECONDITION_REQUIRED => 'Precondition required.',
            self::TOO_MANY_REQUESTS => 'Too many requests.',
            self::REQUEST_HEADER_FIELDS_TOO_LARGE => 'Request header fields too large.',
            self::UNAVAILABLE_FOR_LEGAL_REASONS => 'Unavailable for legal reasons.',
            self::INTERNAL_SERVER_ERROR => 'Internal server error.',
        };
    }
}
