<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function authCheck(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ]);

        if(Auth::attempt($request->only('email', 'password'))){

            return redirect()
                ->intended(route('home'));

        }

        return redirect()
            ->back()
            ->withErrors([
                'email' => 'Invalid credentials'
            ]);


    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login');
    }
}
