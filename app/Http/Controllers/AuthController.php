<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    
    public function showLogin()
    {
        return view('auth.login');
    }

    
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('email','password');

        $remember = $request->has('remember');

        if(Auth::attempt($credentials,$remember))
        {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->with('error','Email or Password incorrect');
    }

   
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');

    }

}