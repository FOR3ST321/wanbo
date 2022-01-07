<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
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

    public function registerPageUSer(){
        return view('/frontend/page/register');
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

    public function authenticateUser(Request $request){
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // dump($request->username);
        
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'is_admin' => 0
        ])){
            $request->session()->regenerate();
            return redirect()->intended('/wanbo');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function registerUser (Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'email' => 'required|email|unique:users',
            'membership_type' => 'required',
            'account_id' => 'required',
            'username' => 'required|min:3|max:64|unique:accounts',
            'password' => 'required|min:6|confirmed',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedDataAccount = [
            'username' => $validatedData['username'],
            'password' => $validatedData['password'],
            'is_admin' => $validatedData['is_admin'],
        ];

        Account::create($validatedDataAccount);
        
        $acc = Account::getLastAcc();
        $validatedDataUser = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'membership_type' => $validatedData['membership_type'],
            'account_id' => $acc->id,
        ];

        User::create($validatedDataUser);

        return redirect('/wanbo/login')->with('success', 'Registration successfull, Please login');
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect('/wanboAdmin/login');
    }

    public function logoutUser(){
        Auth::logout();
        return redirect('/wanbo');
    }
}
