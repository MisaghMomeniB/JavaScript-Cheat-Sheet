<?php

use Illuminate\Support\Facades\Route;
use Modules\Ticket\Http\Controllers\TicketController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('tickets', TicketController::class)->names('ticket');
});
