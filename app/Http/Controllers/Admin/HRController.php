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

    public function indemnityAndleaveCreatePost(Request $request)
    {
        $validate = Validator::make($request->all(), [
         'date'  => 'required',  'cheque_number_receipt_number'  => 'required',
         'description'  => 'required',  'beneficiary'  => 'required',
         'amount_deposited'  => 'required',  'amount_withdrawn'  => 'required',
         'project_name'  => 'required',  'service_type'  => 'required',
         'remarks'  => 'required',  'total_in_account'  => 'required',
        ]);

        if($validate->fails())
        {
         return redirect()->back()->withErrors($validate)->withInput();
        }
        else{
             $date = DateTime::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

             $indemnity = new IndemnityLeave();
             $indemnity->date = $date;
             $indemnity->cheque_number_receipt_number = $request->cheque_number_receipt_number;
             $indemnity->description = $request->description;
             $indemnity->beneficiary = $request->beneficiary;
             $indemnity->amount_deposited = sprintf("%.3f", $request->amount_deposited);
             $indemnity->amount_withdrawn = sprintf("%.3f", $request->amount_withdrawn);
             $indemnity->project_name = $request->project_name;
             $indemnity->service_type = $request->service_type;
             $indemnity->remarks = $request->remarks;
             $indemnity->total_in_account = $request->total_in_account;
             $indemnity->save();

             session()->flash('success', 'Indemnity Created Successfully.');
             return redirect()->route('indemnity&leave');
        }
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
