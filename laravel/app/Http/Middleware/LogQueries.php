<?php

namespace App\Http\Middleware;

use Closure;

class LogQueries
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // example middleware from https://laracasts.com/series/laravel-from-scratch-2018/episodes/25
        return $next($request);
    }
}
