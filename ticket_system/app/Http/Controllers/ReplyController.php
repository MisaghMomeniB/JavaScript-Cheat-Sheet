<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Ticket $ticket)
        {
            $request->validate([
                'message' => 'required',
            ]);

            $ticket->replies()->create([
                'user_id' => auth()->id(),
                'message' => $request->message,
            ]);

            return back();
        }

}
