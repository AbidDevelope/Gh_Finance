<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotationItem;
use App\Models\Quotation;
use App\Models\Beneficiary;
use App, Session, Validator;

class QuotationController extends Controller
{
    public function quotation()
    {
        $quotations = Quotation::all();
        return view('admin.quotations.quotations', compact('quotations'));
    }

    public function switchLanguage($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }

    public function quotationCreateForm()
    {
        $beneficiaries = Beneficiary::with('projects')->orderBy('beneficiary', 'asc')->get();
        $lastQuotation = Quotation::orderBy('id', 'desc')->first();
        $nextQuotationId = $lastQuotation ? $lastQuotation->id + 1: 1;

        return view('admin.quotations.quotations-create', compact('beneficiaries', 'nextQuotationId'));
    }

    public function quotationCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'quotation_number' => 'required',  'quotation_date' => 'required',
            'valid_until'      => 'required',  'subtotal'       => 'required',
            'others'           => 'required',  'grandtotal'     => 'required',
            'description'      => 'required',  'unit'           => 'required',
            'qty'              => 'required',  'price'          => 'required',
            'total'            => 'required', 
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
            // dd($request->all());
        }else{
            // $requestData = $request->all();
            // $quotation = Quotation::create($requestData);
            $quotation = new Quotation();
            $quotation->beneficiary_id = $request->beneficiary_id;
            $quotation->project_id      = $request->project_id;
            $quotation->quotation_number = $request->quotation_number;
            $quotation->quotation_date    = $request->quotation_date;
            $quotation->valid_until      = $request->valid_until;
            $quotation->subtotal        = $request->subtotal;
            $quotation->others         = $request->others;
            $quotation->grandtotal    = $request->grandtotal;
            $quotation->save();

            foreach($request->qty as $key=>$item)
            {
                $quotationItems = new QuotationItem([
                    'quotation_id'  =>$quotation->id,
                    'description'  =>$request->description[$key],
                    'unit'        =>$request->unit[$key],       
                    'qty'        =>$request->qty[$key],
                    'price'     =>$request->price[$key],
                    'total'    =>$request->total[$key],
                ]);
                $quotationItems->save();
            }

            session()->flash('success', 'Quotation Created Successfully.');
            return redirect()->route('quotation');
        }
    }

    public function quotationView()
    {
        return view('admin.quotations.quotations-view');
    }
}
