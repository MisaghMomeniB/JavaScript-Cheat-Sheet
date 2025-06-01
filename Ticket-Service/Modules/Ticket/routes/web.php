<?php

use Illuminate\Support\Facades\Route;
use Modules\Ticket\Http\Controllers\TicketController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tickets', TicketController::class)->names('ticket');
});

Route::middleware(['web,', 'auth'])->group(function() {
    Route::prefix('ticket')->group(function() {
        Route::get('/', [TicketController::class, 'index']);
        Route::get('/create', [TicketController::class, 'create']);
        Route::post('/', [TicketController::class, 'store']);
        Route::get('/{id}', [TicketController::class, 'show']);
        Route::post('/{id}/reply', [TicketController::class, 'reply']);
    });
});