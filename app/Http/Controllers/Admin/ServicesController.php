<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;

class ServicesController extends Controller
{
    public function allServices()
    {
        return view('admin.all-services');
    }

    public function createProjectList()
    {
      return view('admin.create-project');
    }

    public function createProjectData(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'type' => 'required',                   'title' => 'required|string',  
            'beneficiary'  => 'required|string',    'receipt' => 'required|string',  
            'amount'  => 'required|string',         'description' => 'required|string', 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
            $data = new Project();
            $data->type = $request->type;
            $data->title = $request->title;
            $data->beneficiary = $request->beneficiary;
            $data->receipt = $request->receipt;
            $data->amount = $request->amount;
            $data->description = $request->description;
            $data->save();

            session()->flash('success', 'Project Created Successfully');
            return redirect()->route('all/services');
        }
    }
}
