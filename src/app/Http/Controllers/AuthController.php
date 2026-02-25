<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function showPasswordRequestForm()
    {
        return view('auth.password.request');
    }
    public function register(Request $request)
    {
        $validet = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if(User::all()->count() == 0){
            $validet['role'] = 'admin';
        }
        $user = User::create([
            'name' => $validet['name'],
            'email' => $validet['email'],
            'password' => Hash::make($validet['password']),
            'role' => $validet['role'] ?? 'user',
        ]);
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
