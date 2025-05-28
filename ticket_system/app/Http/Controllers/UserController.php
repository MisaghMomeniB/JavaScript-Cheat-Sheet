<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:20|unique:users, username',
            'phone_number' => 'required|string|max:11|unique:users, username',
            'password' => 'required|string|min:6|max:18',
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'password' => $validated['password'],
        ]);

        user::create($validated);
        return redirect()->route('users.index')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'username' => 'sometimes|string|max:20|unique:users, username',
            'phone_number' => 'sometimes|string|size:11|unique:users, username',
            'password' => 'sometimes|string|min:6|max:18',
        ]);

        if($request->filled('password')) {
            $user->passwoord = $validated['password'];
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'information user updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User Deleted');
    }
}
