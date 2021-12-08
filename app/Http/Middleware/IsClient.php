<?php

namespace App\Http\Middleware;

use Closure;

class IsClient
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
        if(auth()->user()->role_id > 0 && auth()->user()) {
            return $next($request);
        }
        return redirect('/tours');
        // return redirect('/client/orders');
    }
}