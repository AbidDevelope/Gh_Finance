<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function indemnityAndleaveEdit()
    {
       return view('admin.hr.indemnity_leave_edit');
    }

    public function indemnityAndleaveView()
    {
       return view('admin.hr.indemnity_leave_view');
    }
}
