<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
public function index()
{
$user_id = Session::get('user_id');
$role = Session::get('user_role');

if ($role == 'admin') {
$tickets = Ticket::with('user')->paginate(10);
} else {
$tickets = Ticket::where('user_id', $user_id)->paginate(10);
}

return view('tickets.index', compact('tickets', 'role'));
}

public function create()
{
return view('tickets.create');
}

public function store(Request $request)
{
$request->validate([
'title' => 'required',
'description' => 'required',
]);

$user_id = Session::get('user_id');

Ticket::create([
'title' => $request->title,
'description' => $request->description,
'user_id' => $user_id,
]);

return redirect('/tickets');
}

public function edit($id)
{
$ticket = Ticket::findOrFail($id);
$role = Session::get('user_role');
$user_id = Session::get('user_id');

// فقط ادمین می‌تواند وضعیت را تغییر دهد
if ($role != 'admin') {
abort(403);
}

return view('tickets.edit', compact('ticket'));
}

public function update(Request $request, $id)
{
$ticket = Ticket::findOrFail($id);

$request->validate([
'status' => 'required|in:open,in_progress,closed',
]);

$role = Session::get('user_role');
if ($role != 'admin') {
abort(403);
}

$ticket->update([
'status' => $request->status,
]);

return redirect('/tickets');
}
}
