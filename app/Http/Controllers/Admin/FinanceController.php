<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App, Session;

class FinanceController extends Controller
{

    public function invoiceList()
    {
        return view('admin.invoices');
    }

    public function invoiceCreate()
    {
        return view('admin.invoices-create');
    }
    public function invoiceView()
    {
        return view('admin.invoice-view');
    }

    public function quotation()
    {
        return view('admin.quotation');
    }

    public function quotationCreate()
    {
        return view('admin.quotations-create');
    }

    public function quotationView()
    {
        return view('admin.quotations-view');
    }

    public function switchLanguage($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }

    public function paymentList()
    {
        return view('admin.payments');
    }

    public function expensesList()
    {
        return view('admin.expenses');
    }
}
