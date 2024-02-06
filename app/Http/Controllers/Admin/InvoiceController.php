<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary;

class InvoiceController extends Controller
{
    public function invoiceList()
    {
        return view('admin.invoices.invoices');
    }

    public function invoice()
    { 
        $data = Beneficiary::all();
        return view('admin.invoices.invoices-create', compact('data'));
    }

    public function invoiceView()
    {
        return view('admin.invoices.invoices-view');
    }

    public function invoiceCreate(Request $request)
    {
      dd($request->all());
    }
}
