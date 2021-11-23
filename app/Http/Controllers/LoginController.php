<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.indexlogin', [
            'title'=> 'Login'
            ]);
    }

    public function authentication(Request $request)
    {   
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');

//     $credentials = $request->only('email', 'password');
 
//     if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();
 
//         return redirect()->intended('dashboard');
//     }
 
    
    }
}