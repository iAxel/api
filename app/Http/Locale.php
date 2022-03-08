<?php

namespace App\Http;

use function config;
use function in_array;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Translation\Translator;

final class Locale
{
    /**
     * @var Translator
     */
    protected Translator $lang;

    /**
     * @param Translator $lang
     *
     * @return void
     */
    public function __construct(Translator $lang)
    {
        $this->lang = $lang;
    }

    /**
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $locale = $request->header('X-Locale', config('app.locale'));

        $checkLocale = in_array($locale, config('app.locales'), true);

        if ($checkLocale) {
            $this->lang->setLocale($locale);
        }

        return $next($request);
    }
}
