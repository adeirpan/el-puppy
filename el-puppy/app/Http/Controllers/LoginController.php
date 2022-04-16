<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('loginForm', [
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed');
        //dd('berhasil login');
    }
}
