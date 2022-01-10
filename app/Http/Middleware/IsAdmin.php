<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IsAdmin
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
            Alert::warning('Warning', 'You haven\'t login in any user level!');
            return redirect('/wanboAdmin/login')->with('error',"You haven't login in any user level!");
        }

        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
        
        Alert::warning('Warning', 'You didn\'t have admin access.');
        return redirect('/wanbo')->with('error',"You don't have admin access.");
    }
}
