<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::guest())
        {

            return redirect()->route('home.index');
        }
        elseif(Auth::user()->hasPermission('admin'))
        {
            return $next($request);
        }else{
            return redirect()->route('home.index');
        }
    }
}
