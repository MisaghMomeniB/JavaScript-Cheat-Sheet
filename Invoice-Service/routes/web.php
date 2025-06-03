<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function() {
    return view('form.register');
});

Route::get('/login', function() {
    return view('form.login');
});