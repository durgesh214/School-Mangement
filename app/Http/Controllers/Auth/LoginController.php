<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{ 

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if($email == "admin@gmail.com" && $password == "123456")
        {
            return redirect('/dashboard');
            
        }
         if ($email == "student@gmail.com" && $password == "student123")
        {
            return redirect('/students');
        }
         if ($email == "teacher@gmail.com" && $password == "teacher123")
        {
            return redirect('/teachers');
        }

        else
        {
            return back()->with('error','Invalid Login');
        }
    }
}