<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IndemnityImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndemnityLeave;
use Validator;
use DateTime;
use \Carbon\Carbon;

class HRController extends Controller
{
   public function indemnityAndleave()
   {
      $indemnity = IndemnityLeave::all()->map(function ($item) {
         $item->amount_deposited = preg_match('/[\d,]+\.\d+/', $item->amount_deposited, $matchesDeposited) ? floatval(str_replace(',', '', $matchesDeposited[0])) : 0;

        $item->amount_withdrawn = preg_match('/[\d,]+\.\d+/', $item->amount_withdrawn, $matchedWithdrawn) ? floatval(str_replace(',', '', $matchedWithdrawn[0])) : 0;

         return $item;
      });

      $totalIndemnity = $indemnity->sum('amount_deposited');
      $totalWithdrawn = $indemnity->sum('amount_withdrawn');

      return view('admin.hr.indemnity_leave', compact('indemnity', 'totalIndemnity', 'totalWithdrawn'));
   }



    public function indemnityAndleaveCreate()
    {
       return view('admin.hr.indemnity_leave_create');
    }

    public function indemnityAndleaveView()
    {
       return view('admin.hr.indemnity_leave_view');
    }

    public function indemnityAndleaveEdit()
    {
       return view('admin.hr.indemnity_leave_edit');
    }

    public function indemnityImport(Request $request)
    {
      $validate = Validator::make($request->all(), [
         'file'   => 'required'
     ]);

     if($validate->fails())
     {
         return redirect()->back()->withErrors($validate)->withInput();
     }

     $file = $request->file('file');
   //   dd($file);
      Excel::import(new IndemnityImport, $file);

     return back()->with('success', 'Uploaded Successfully.');
    }

    public function indemnityFilter(Request $request){
      $validate = Validator::make($request->all(), [
         'start_date' => 'required',  'end_date'  => 'required'
     ]);
     if($validate->fails())
     {
         return redirect()->back()->withErrors($validate)->withInput();
     }else{
    
            $indemnity = IndemnityLeave::all()->map(function ($item) {
               $item->amount_deposited = preg_match('/[\d,]+\.\d+/', $item->amount_deposited, $matchesDeposited) ? floatval(str_replace(',', '', $matchesDeposited[0])) : 0;
      
              $item->amount_withdrawn = preg_match('/[\d,]+\.\d+/', $item->amount_withdrawn, $matchedWithdrawn) ? floatval(str_replace(',', '', $matchedWithdrawn[0])) : 0;
      
               return $item;
            });
      
            $totalIndemnity = $indemnity->sum('amount_deposited');
            $totalWithdrawn = $indemnity->sum('amount_withdrawn');

            $startDate = Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
            $endDate = Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');
            $indemnity = IndemnityLeave::whereDate('date', '>=', $startDate)
                                ->whereDate('date', '<=', $endDate)
                                ->get();
      
            return view('admin.hr.indemnity_leave', compact('indemnity', 'totalIndemnity', 'totalWithdrawn'));
     }
    }
}
