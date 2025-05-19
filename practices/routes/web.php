<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

Route::get('/login', function () {
    return "LogIn";
});

Route::get('/register', [PageController::class, 'register']);
});
?>