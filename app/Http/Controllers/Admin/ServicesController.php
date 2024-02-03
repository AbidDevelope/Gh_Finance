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
            'type'          => 'required|string|max:255' ,  'project'        => 'required|string|max:255',
            'purchase_from' => 'required|string|max:255' ,  'purchase_date'  => 'required|string|max:255',
            'purchase_by'   => 'required|string|max:255' ,  'amount'         => 'required|string|max:255',
            'paid_by'       => 'required|string|max:255' ,  'description'   => 'required|string|max:255' , 
            'attachments'   => 'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
           $requestData = $request->all();
           if($request->hasFile('attachments'))
           {
            $file = $request->file('attachments');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.'. $extension;
            $file->move(public_path('uploads/designs'), $fileName);
            $requestData['attachments'] = $fileName;
        }
        Project::create($requestData);

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
            'type'          => 'required|string|max:255' ,  'project'        => 'required|string|max:255',
            'purchase_from' => 'required|string|max:255' ,  'purchase_date'  => 'required|string|max:255',
            'purchase_by'   => 'required|string|max:255' ,  'amount'         => 'required|string|max:255',
            'paid_by'       => 'required|string|max:255' ,  'description'   => 'required|string|max:255' , 
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

    public function designChangeStatus($id)
    {
        $data = Project::where('id', $id)->first();

        if($data->status == 'Pending')
        {
            $status = 'Approved';
        }else{
            $status = 'Pending';
        }

        $value = array('status' => $status);
        Project::where('id', $id)->update($value);

        session()->flash('success', 'Status Change Successfully.');
        return redirect()->back();
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
        return view('admin.constructions.constructions',compact('data'));
    }

    public function createConstructionsList()
    {
        return view('admin.constructions.contsructions-create');
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
       return view('admin.constructions.constructions-edit', compact('data'));
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
