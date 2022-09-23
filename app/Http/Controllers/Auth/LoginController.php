<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Auth;

class LoginController extends Controller
{
    public function create() {
        return Inertia::render('auth/login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'El correo no existes.',
        ])->onlyInput('email');
    }

    public function destroy() {
        Auth::logout();
        return redirect()->route('login');
    }
}
