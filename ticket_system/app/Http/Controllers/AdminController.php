<?php

namespace App\Http\Controllers;

use App\Models\Ticket;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tickets = Ticket::latest()->with('user')->get();

        return view('admin.dashboard', compact('tickets'));
    }
}
