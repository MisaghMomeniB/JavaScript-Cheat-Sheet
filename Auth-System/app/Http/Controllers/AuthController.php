<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // LoginGet
    public function showLogin() {
        return view('auth.login');
    }

    // RegisterGet
    public function showRegister() {
        return view('auth.register');
    }
}
