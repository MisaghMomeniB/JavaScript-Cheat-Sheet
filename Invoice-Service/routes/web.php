<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', function() {
//     return view('form.register');
// });

Route::get('/register', [AuthController::class, 'showRegister']);

// Route::get('/login', function() {
//     return view('form.login');
// });

Route::get('/login', [AuthController::class, 'showLogin']);