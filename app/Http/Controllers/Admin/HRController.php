<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IndemnityImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndemnityLeave;
use Validator;
use DateTime;

class HRController extends Controller
{
    public function indemnityAndleave()
    {
      $indemnity = IndemnityLeave::all();
       return view('admin.hr.indemnity_leave', compact('indemnity'));
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
}
