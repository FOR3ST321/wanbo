<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('/frontend/page/dashboard');
    }

    public function profile(){
        return view('/frontend/page/profile');
    }
}
