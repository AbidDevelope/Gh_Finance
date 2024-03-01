<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Miscellaneous;
use App\Models\MiscellaneousItem;
use App\Models\PettyCash;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function projectReport()
    {
        $projects = Project::with(['pettyCash', 'payments'])->get();

        $totalProjectValue = $projects->sum('project_value');
        
        $totalExpenseValue = $projects->reduce(function ($carry, $project) {
            $pettyCashTotal = $project->pettyCash->sum('total_in_account');
            return  $pettyCashTotal;
        }, 0);

        $totalReceivablesValue = $projects->reduce(function ($carry, $project) {
            $receivablesTotal = $project->payments->sum('amount');
            return  $receivablesTotal;
        }, 0);
        
        $formattedValue = number_format($totalProjectValue, 3, '.', ',');
        
        $totalExpenseValueFormatted = number_format($totalExpenseValue, 3, '.', ','); 

        $receivablesValueFormatted = number_format($totalReceivablesValue, 3, '.', ','); 
        
        return view('admin.report.project_report', compact('projects', 'formattedValue', 'totalExpenseValueFormatted', 'receivablesValueFormatted'));
        
    }


    public function reportView()
    {
        return view('admin.report.report-view');
    }
}
