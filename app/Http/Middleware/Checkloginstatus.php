<?php

namespace App\Http\Middleware;

use \Illuminate\Http\Request;
use Closure;

class Checkloginstatus
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
//        dd($request->session()->has('user'));
        if (!$request->session()->has('user'))
        {
            return redirect(route('loginpage'));
        }

        return $next($request);
    }
}
