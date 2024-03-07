<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Miscellaneous;
use App\Models\MiscellaneousItem;
use App\Models\PettyCash;
use Carbon\Carbon;
use Validator, DateTime;

class ReportController extends Controller
{
    public function projectReport(Request $request)
    {
        $projects = Project::with(['pettyCash', 'payments'])->get();

        $totalProjectValue = $projects->sum('project_value');
        $totaltotalReceivable = $projects->sum('total_receivable');
        $pendingReceivable =  $totalProjectValue - $totaltotalReceivable;
        
        $totalExpenseValue = $projects->reduce(function ($carry, $project) {
            if($project->pattyCash)
            {
                $pettyCashTotal = $project->pettyCash->sum('total_in_account');
            }else{
                $pettyCashTotal = 0;
            }
            return  $carry + $pettyCashTotal;
        }, 0);

        $totalReceivablesValue = $projects->reduce(function ($carry, $project) {
            $receivablesTotal = $project->payments->sum('amount');
            return  $receivablesTotal;
        }, 0);
        
        $formattedValue = number_format($totalProjectValue, 3, '.', ',');
        $formattedValueReceivable = number_format($totaltotalReceivable, 3, '.', ',');
        $formattedValuePendingReceivable = number_format($pendingReceivable, 3, '.', ',');
        
        $totalExpenseValueFormatted = number_format($totalExpenseValue, 3, '.', ','); 

        $receivablesValueFormatted = number_format($totalReceivablesValue, 3, '.', ','); 
        
        return view('admin.report.project_report', compact('projects', 'formattedValue', 'totalExpenseValueFormatted', 'receivablesValueFormatted', 'formattedValueReceivable', 'formattedValuePendingReceivable'));
        
    }

    public function searchByDate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'start_date'  => 'required|date_format:d/m/Y',
            'end_date'    => 'required|date_format:d/m/Y',
        ]);

        if($validate->fails())
        {
        return redirect()->back()->withErrors($validate)->withInput();
        }

        $startDate = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $endDate  = DateTime::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');

        $projects = Project::whereDate('start_date', '>=', $startDate)
                    ->whereDate('start_date', '<=', $endDate)
                    ->with(['pettyCash', 'payments'])
                    ->get();

        
        $totalProjectValue = $projects->sum('project_value');
        $totaltotalReceivable = $projects->sum('total_receivable');
        $pendingReceivable =  $totalProjectValue - $totaltotalReceivable;
        
        $totalExpenseValue = $projects->reduce(function ($carry, $project) {
            $pettyCashTotal = $project->pettyCash->sum('total_in_account');
            return  $pettyCashTotal;
        }, 0);

        $totalReceivablesValue = $projects->reduce(function ($carry, $project) {
            $receivablesTotal = $project->payments->sum('amount');
            return  $receivablesTotal;
        }, 0);
        
        $formattedValue = number_format($totalProjectValue, 3, '.', ',');
        $formattedValueReceivable = number_format($totaltotalReceivable, 3, '.', ',');
        $formattedValuePendingReceivable = number_format($pendingReceivable, 3, '.', ',');
        
        $totalExpenseValueFormatted = number_format($totalExpenseValue, 3, '.', ','); 

        $receivablesValueFormatted = number_format($totalReceivablesValue, 3, '.', ','); 
        
        return view('admin.report.project_report', compact('projects', 'formattedValue', 'totalExpenseValueFormatted', 'receivablesValueFormatted', 'formattedValueReceivable', 'formattedValuePendingReceivable'));
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
