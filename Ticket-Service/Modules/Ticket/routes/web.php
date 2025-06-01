<?php

use Illuminate\Support\Facades\Route;
use Modules\Ticket\Http\Controllers\TicketController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tickets', TicketController::class)->names('ticket');
});
