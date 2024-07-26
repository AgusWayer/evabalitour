<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThrottleLoginAttempts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $this->throttleKey($request);
        $maxAttempts = 3;
        $lockoutTime = 15 * 60; // 15 minutes in seconds
        $dayLockoutTime = 24 * 60 * 60; // 1 day in seconds

        if (Cache::has($key.':day_blocked')) {
            throw new ThrottleRequestsException('Too many login attempts. Please try again in 1 day.');
        }

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            if (Cache::increment($key.':block_count') >= 3) {
                Cache::put($key.':day_blocked', now()->addSeconds($dayLockoutTime), $dayLockoutTime);
                Cache::forget($key.':block_count');
                throw new ThrottleRequestsException('Too many login attempts. Please try again in 1 day.');
            } else {
                Cache::put($key.':blocked', now()->addSeconds($lockoutTime), $lockoutTime);
                throw new ThrottleRequestsException('Too many login attempts. Please try again in 15 minutes.');
            }
        }
        return $next($request);
    }
    protected function throttleKey($request)
    {
        return Str::lower($request->input('email')).'|'.$request->ip();
    }

    protected function incrementAttempts($key)
    {
        RateLimiter::hit($key, 60 * 15);
    }
}
