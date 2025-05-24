<?php

use App\Http\Controllers\PageController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');