<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPageAdmin(){
        return view('/admin/page/login');
    }

    public function loginPageUSer(){
        return view('/frontend/page/login');
    }


    public function authenticate(Request $request){
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'is_admin' => 1
        ])){
            $request->session()->regenerate();
            return redirect()->intended('/wanboAdmin');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logoutAdmin(Request $request){
        Auth::logout();
        return redirect('/wanboAdmin/login');
    }
}
