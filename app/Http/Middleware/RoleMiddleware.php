<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {

        var_dump($role);
        /* if (!$request->user()->hasRole($role)) {
         }*/
        return $next($request);
    }
}
