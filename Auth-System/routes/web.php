<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// LoginGet and Post
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');

// RegisterGet and Post
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');