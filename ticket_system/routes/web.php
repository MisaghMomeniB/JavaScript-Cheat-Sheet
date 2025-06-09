<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth.custom')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', function () {
        return redirect('/tickets');
    });

    Route::get('/tickets', [TicketController::class, 'index']);
    Route::get('/tickets/create', [TicketController::class, 'create']);
    Route::post('/tickets', [TicketController::class, 'store']);

    Route::middleware('role:admin')->group(function () {
        Route::get('/tickets/{id}/edit', [TicketController::class, 'edit']);
        Route::put('/tickets/{id}', [TicketController::class, 'update']);
    });
});
