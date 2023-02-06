<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function show() {
        return view('auth.login', [
            "title" => "Login"
        ]);
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                return redirect('/admin/home');
            } else {
                return redirect('/home');
            }
        }

        return redirect('/');

    }

}
