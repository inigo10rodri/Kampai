<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Bar
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
        if(Auth::user() && Auth::user()->isBar())
        {
            return $next($request);
        }
        return redirect('/');
    }
}
