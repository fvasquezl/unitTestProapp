<?php

namespace App\Http\Middleware;

use Closure;
use Styde\Html\Facades\Alert;

class IsVerified
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

        if (auth()->user()->registration_token != null){
            Alert::message('Please verify your Email');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
