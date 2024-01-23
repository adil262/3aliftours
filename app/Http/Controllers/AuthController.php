<?php

namespace App\Http\Controllers;

use \App\admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $login=admin::all();
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }
}
