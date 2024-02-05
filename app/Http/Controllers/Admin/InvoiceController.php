<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceList()
    {
        return view('admin.invoices.invoices');
    }

    public function invoice()
    {
        return view('admin.invoices.invoices-create');
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
