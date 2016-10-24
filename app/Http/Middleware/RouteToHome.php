<?php

namespace App\Http\Middleware;

use Closure;

class RouteToHome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $parameter)
    {
        echo "Doing something in middleware... " . $parameter;
        return $next($request);
    }
}
