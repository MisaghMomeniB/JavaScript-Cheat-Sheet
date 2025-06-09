<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
           'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'role' => 'user'
        ]);

        Session::put('user_id', $user->id);
        Session::put('role', $user->role);

        return redirect('/dashboard');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user_id', $user->id);
            Session::put('user_role', $user->role);

            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
