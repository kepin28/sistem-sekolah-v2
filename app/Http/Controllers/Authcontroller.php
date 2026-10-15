<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('students.index');
        }

        return back()->withErrors([
            'email' => 'Email or Password does not match',
        ]);
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => ['required', 'string'],
            'email' => [
                'required',
                'string',
                'email',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);

        User::create([
            'name' => $validatedRequest['name'],
            'email' => $validatedRequest['email'],
            'password' => Hash::make($validatedRequest['password']),
            'role' => 'student',
        ]);

        return redirect()->route('login-view');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-view');
    }
}