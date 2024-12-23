<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == true) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
