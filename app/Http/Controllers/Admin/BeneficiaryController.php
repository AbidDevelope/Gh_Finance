<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use Validator;

class BeneficiaryController extends Controller
{
    public function beneficiary()
    {
        $data = Beneficiary::all();
        return view('admin.beneficiary.beneficiary', compact('data'));
    }

    public function beneficiaryCreate()
    {
        return view('admin.beneficiary.beneficiary-create');
    }

    public function beneficiaryCreatePost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'beneficiary'          => 'required|string|max:255',   'email' => 'required|email|unique:beneficiaries',
            'beneficiary_address'  => 'required|string|max:255',   'mobile' => 'required|numeric',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();

            $data = Beneficiary::create($requestData);
            if($data)
            {
                session()->flash('success', 'Beneficiary Created Successfully.');
                return redirect()->route('beneficiary');
            }else{
                session()->flash('error', 'Something Went Wrong!');
                return redirect()->back();
            }
        }
    }

    public function changeStatus($id)
    {
       $beneficiary = Beneficiary::where('id', $id)->first();

       if($beneficiary->status == 'Inactive')
       {
        $status = 'Active';
       }else{
        $status = 'Inactive';
       }

       $value = array('status' => $status);

       Beneficiary::where('id', $id)->update($value);
       
       session()->flash('success', 'Status Change Successfully.');
       return redirect()->back();
    }

    public function beneficiaryEdit($id)
    {
        $data = Beneficiary::find($id);
        return view('admin.beneficiary.beneficiary-edit', compact('data'));
    }

    public function beneficiaryUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'beneficiary'          => 'required|string|max:255',   'email' => 'required',
            'beneficiary_address'  => 'required|string|max:255',   'mobile' => 'required|numeric',
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();
            $beneficiary = Beneficiary::where('id', $id)->first();

            if($beneficiary)
            {
                $beneficiary->update($requestData);

                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('beneficiary');
            }
        }
    }

    public function beneficiaryDelete($id)
    {
        Beneficiary::find($id)->delete();
        session()->flash('success', 'Data Deleted Successfully.');
        return redirect()->back();
    }
}
