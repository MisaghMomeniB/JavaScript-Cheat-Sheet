<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PageController::class, 'login']);

Route::get('/register', [PageController::class, 'register'])->middleware('guest', 'throtte:10,1');

?>