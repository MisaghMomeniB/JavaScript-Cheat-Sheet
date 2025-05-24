<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    use AuthorizesRequests;
    public function index()
        {
            $tickets = auth()->user()->tickets;
            return view('tickets.index', compact('tickets'));
        }

        public function create()
        {
            return view('tickets.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'subject' => 'required',
                'message' => 'required',
            ]);

            $ticket = auth()->user()->tickets()->create($request->only('subject', 'message'));

            return redirect()->route('tickets.show', $ticket);
        }

        public function show(Ticket $ticket)
        {
            $this->authorize('view', $ticket); // در صورت نیاز

            return view('tickets.show', compact('ticket'));
        }

}
