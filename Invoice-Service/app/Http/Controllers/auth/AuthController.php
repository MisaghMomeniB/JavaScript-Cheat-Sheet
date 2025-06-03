<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {
        return view('form.login');
    }

    public function showRegister() {
        return view('/form.register');
    }
}
