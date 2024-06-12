<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // $credentials = ['password' => 'admin1'];
        //User::find(5)->update($credentials);
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // User successfully authenticated
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors(['message' => 'Invalid credentials']);
        }
    }
    public function logout()
    {
        //delete login session current user
        Auth::logout();
        return redirect()->route('login');
    }
}
