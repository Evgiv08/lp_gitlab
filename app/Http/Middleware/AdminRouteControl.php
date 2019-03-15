<?php

namespace App\Http\Middleware;

use Closure;;

class AdminRouteControl
{
    /**
     * Specified  routes  for admin only.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth('staff')->user()->role_id != config('constants.admin')) {
            return back();
        }

        return $next($request);
    }
}
