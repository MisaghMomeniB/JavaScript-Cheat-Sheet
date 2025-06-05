<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
public function index() {
$invoices = Auth::user()->invoices;
return view('dashboard', [
'invoices' => $invoices,
'categories' => Category::all()
]);
}

public function store(Request $request) {
$request->validate([
'store' => 'required',
'date' => 'required|date',
'category_id' => 'required|exists:categories,id',
'price' => 'required|integer',
]);

Auth::user()->invoices()->create($request->all());
return redirect()->route('dashboard');
}
}
