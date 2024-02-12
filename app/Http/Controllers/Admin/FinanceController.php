<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App, Session;

class FinanceController extends Controller
{


    public function paymentList()
    {
        return view('admin.payments');
    }
}
