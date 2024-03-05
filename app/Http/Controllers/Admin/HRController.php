<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IndemnityImport;
use App\Models\IndemnityLeave;
use Validator;

class HRController extends Controller
{
    public function indemnityAndleave()
    {
       return view('admin.hr.indemnity_leave');
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
     Excel::import(new IndemnityLeave, $file);

     return back()->with('success', 'Imported successfully.');
    }
}
