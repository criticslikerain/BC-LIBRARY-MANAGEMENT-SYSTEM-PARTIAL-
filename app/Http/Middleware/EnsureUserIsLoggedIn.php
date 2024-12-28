<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnsureUserIsLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
   
        if (!Session::has('login') || !Session::get('login')) {
            return redirect()->route('login'); 
        }

        return $next($request); 
    }
}
