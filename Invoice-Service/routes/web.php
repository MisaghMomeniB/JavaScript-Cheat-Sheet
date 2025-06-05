<?php

use App\Http\Controllers\auth\AuthController;
use App\http\Controllers\auth\RegisterController;
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', function() {
//     return view('form.register');
// });

//Route::get('/register', [AuthController::class, 'showRegister']);

// Route::get('/login', function() {
//     return view('form.login');
// });

//Route::get('/login', [AuthController::class, 'showLogin']);

Route::get('/create-invoice', [AuthController::class, 'invoice']);

// Register
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
