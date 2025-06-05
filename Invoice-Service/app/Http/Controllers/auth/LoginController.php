<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
public function show()
{
return view('form.login');
}

public function login(Request $request)
{
$credentials = $request->validate([
'mobile' => 'required|string|regex:/^09[0-9]{9}$/',
'password' => 'required|string',
]);

if (Auth::attempt($credentials)) {
$request->session()->regenerate();

// هدایت بر اساس نقش (بعداً اضافه می‌کنی)
return redirect()->route('dashboard');
}

return back()->withErrors([
'mobile' => 'اطلاعات وارد شده صحیح نمی‌باشد.',
])->onlyInput('mobile');
}
}
