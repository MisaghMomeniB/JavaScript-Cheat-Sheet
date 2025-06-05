<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
public function show()
{
return view('form.register');
}

public function register(Request $request)
{
$request->validate([
'first_name' => 'required|string|max:100',
'last_name' => 'required|string|max:100',
'mobile' => 'required|string|unique:users,mobile|regex:/^09[0-9]{9}$/',
'password' => 'required|string|min:6|confirmed',
]);

$user = User::create([
'first_name' => $request->first_name,
'last_name' => $request->last_name,
'mobile' => $request->mobile,
'password' => Hash::make($request->password),
]);

auth()->login($user);

return redirect()->route('dashboard');
}
}
