<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // showLogin Controller and Set Route
    public function showLogin() {
        return view('form.login');
    }

    // showRegister Controller and Set Route
    public function showRegister() {
        return view('/form.register');
    }

    public function invoice() {
        return view('invoice.invoice');
    }
}
