<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function normal()
    {
        if (Auth::check()) {
            return view('normal');
        }

        return redirect('/');
    }

    public function admin()
    {
        if (Auth::check()) {
            return view('admin');
        }

        return redirect('/');
    }
}
