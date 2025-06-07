<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
public function index() {
$invoices = Auth::user()->invoices;
return view('auth.dashboard', [
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



//  PDF Item!
    $invoice = Auth::user()->invoices()->create($request->all());
    $pdf = Pdf::loadview('invoice.preview', ['invoice' => $invoice]);
    $fileName = 'invoice_' . $invoice->id . '.pdf';
    $path = storage_path('app/public/invoices/' . $fileName);
    $pdf->save($path);

    $pdflink = asset('storage/invoices/' . $fileName);

    return redirect()->route('dashboard')->with('invoice_pdf', $pdflink);
//return redirect()->route('dashboard');
}
}
