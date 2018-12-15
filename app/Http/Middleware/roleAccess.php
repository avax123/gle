<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class roleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset(Auth::user()->user_role) && Auth::user()->user_role == 'admin') {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}


