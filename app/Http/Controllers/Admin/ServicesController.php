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
        $data = Project::all();
        return view('admin.all-services', compact('data'));
    }

    public function designConstructions()
    {
        $data = Project::whereIn('type', ['Design', 'Constructions'])->get();
        return view('admin.design-&-construction',compact('data'));
    }

    public function createDesignList()
    {
      return view('admin.designs-create');
    }

    public function createDesign(Request $request)
    {
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

            session()->flash('success', 'Designs Created Successfully');
            return redirect()->route('designs');
        }
    }

    public function designs()
    { 
        $data = Project::where(['type' => 'Design'])->get();
        return view('admin.designs', compact('data'));
    }

    public function designEdit($id)
    {
        $data = Project::find($id);
        return view('admin.design-edit', compact('data'));
    }

    public function designUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'type' => 'required',                   'title' => 'required|string',  
            'beneficiary'  => 'required|string',    'receipt' => 'required|string',  
            'amount'  => 'required|string',         'description' => 'required|string', 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $getData = Project::where('id', $id)->first();
            $data = $request->all();
            if($getData)
            {
                $getData->update($data);

                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('designs');
            }else{
              session()->flash('error', 'Something Went Wrong.');
              return redirect()->back();
            }
        }
    }

    public function designDelete($id)
    {
       Project::find($id)->delete();

       session()->flash('success', 'Data Deleted Successfully.');
       return redirect()->back();
    }

    public function constructions()
    {
        $data = Project::where(['type' => 'Constructions'])->get();
        return view('admin.constructions',compact('data'));
    }

    public function createConstructionsList()
    {
        return view('admin.contsructions-create');
    }

    public function createConstructions(Request $request)
    {
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

            session()->flash('success', 'Constructions Created Successfully');
            return redirect()->route('constructions');
        }
    }

    public function constructionsEdit($id)
    {
       $data = Project::find($id);
       return view('admin.constructions-edit', compact('data'));
    }

    public function constructionsUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'type' => 'required',                   'title' => 'required|string',  
            'beneficiary'  => 'required|string',    'receipt' => 'required|string',  
            'amount'  => 'required|string',         'description' => 'required|string', 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $getData = Project::where('id', $id)->first();
            $data = $request->all();
            if($getData)
            {
                $getData->update($data);

                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('constructions');
            }else{
                session()->flash('error', 'Something Went Wrong.');
                return redirect()->back();
            }
        }
    }

    public function constructionsDelete($id)
    {
       Project::find($id)->delete();

       session()->flash('success', 'Constructions Deleted Successfully.');
    }
}
