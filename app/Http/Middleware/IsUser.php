<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
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
        if(auth()->user() == null){
            return redirect('/wanbo/login')->with('error',"You haven't login in any user level!");
        }

        if(auth()->user()->is_admin == 0){
            return $next($request);
        }
   
        return redirect('/wanboAdmin')->with('error',"You don't have user access.");
    }
}
