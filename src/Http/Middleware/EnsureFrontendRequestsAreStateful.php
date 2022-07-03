<?php declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Pipeline;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class EnsureFrontendRequestsAreStateful
{
    /**
     * Handle the incoming requests.
     *
     * @param Request $request
     * @param callable $next
     * @return Response
     */
    public function handle(Request $request, callable $next): Response
    {
        return (new Pipeline(app()))->send($request)->through(static::fromFrontend($request) ? [
            function ($request, $next) {
                $request->attributes->set('sanctum', true);

                return $next($request);
            },
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            VerifyCsrfToken::class,
        ] : [])->then(function ($request) use ($next) {
            return $next($request);
        });
    }

    /**
     * Determine if the given request is from the first-party application frontend.
     *
     * @param Request $request
     * @return bool
     */
    public static function fromFrontend(Request $request): bool
    {
        $domain = $request->headers->get('referer') ?: $request->headers->get('origin');

        if (is_null($domain)) {
            return false;
        }

        $domain = Str::replaceFirst('https://', '', $domain);
        $domain = Str::replaceFirst('http://', '', $domain);
        $domain = Str::endsWith($domain, '/') ? $domain : "{$domain}/";

        $stateful = array_filter(config('sanctum.stateful', []));

        return Str::is(Collection::make($stateful)->map(function ($uri) {
            return trim($uri).'/*';
        })->all(), $domain);
    }
}
