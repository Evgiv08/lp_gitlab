<?php

namespace App\Http\Middleware;

use Closure;

class ClientRouteControl
{
    /**
     * Specified  routes  for register Client only.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! auth('client')->check()) {
            return back();
        }

        return $next($request);
    }
}
