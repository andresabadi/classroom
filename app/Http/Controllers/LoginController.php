<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {

        //validate data 
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        //if no redirect 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function home()
    {
        return view ('home'); 
    }

    public function logout(Request $request)
    {
        // Cerrar sesión del usuario actual
        Auth::logout();
    
        // Redirigir al usuario a la página de inicio o a donde desees
        return redirect('/');
    }
    
}
