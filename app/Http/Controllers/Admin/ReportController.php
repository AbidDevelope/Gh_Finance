<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function projectReport()
    {
        return view('admin.report.project_report');
    }

    public function reportView()
    {
        return view('admin.report.report-view');
    }

    public function profitLossReport()
    {
        return view('admin.report.P&L');
    }

    public function expenseReport()
    {
        return view('admin.report.expense_report');
    }


}
