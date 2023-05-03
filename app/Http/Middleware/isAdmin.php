<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //if (Auth::user() && Auth::user()->hasRole("Admin")) {
        if (Auth::user() && Auth::user()->hasRole(1)) {
            return $next($request);
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
