<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\QuotationExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotationItem;
use App\Models\Quotation;
use App\Models\Beneficiary;
use App\Models\Project;
use App, Session, Validator;
use Carbon\Carbon;

class QuotationController extends Controller
{
    public function quotation()
    {
        $quotations = Quotation::orderBy('id', 'desc')->get();
        return view('admin.quotations.quotations', compact('quotations'));
    }

    public function switchLanguage($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }

    public function quotationCreateForm()
    {
        $lastQuotation = Quotation::orderBy('id', 'desc')->first();

        return view('admin.quotations.quotations-create');
    }

    public function quotationCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'quotation_number' => 'required',  'quotation_date' => 'required',
            'subtotal'         => 'required',  'others'         => 'required', 
            'grandtotal'       => 'required',  
            
            'description'      => 'required',  'unit'           => 'required',
            'qty'              => 'required',  'price'          => 'required',
            'total'            => 'required', 
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
            // dd($request->all());
        }else{
            $quotation = new Quotation();
            $quotation->project_id      = $request->project_id;
            $quotation->quotation_number = $request->quotation_number;
            $quotation->quotation_date    = $request->quotation_date;
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

    public function quotationView($id)
    {
        $quotations = Quotation::where('id', $id)->with('quotationItems')->first();
        // return $quotations;

        return view('admin.quotations.quotations-view', compact('quotations'));
    }

    public function getProjectData($id)
    {
        $project = Project::find($id);

        if ($project) {
            return response()->json([
                'status' => 'success',
                'data' => $project,
            ]);
        }

        return response()->json(['message' => 'Project not found'], 404);
    }

    public function searchQuotation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date_format:d/m/Y',
            'end_date' => 'required|date_format:d/m/Y',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $startDate = Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $endDate = Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');

        $quotations = Quotation::whereDate('quotation_date', '>=', $startDate)
                            ->whereDate('quotation_date', '<=', $endDate)
                            ->get(); 
        if($quotations)
        {
            return view('admin.quotations.quotations', compact('quotations'));
        } 
    }

    public function quotationExport()
    {
        return Excel::download(new QuotationExport, 'quotation.xlsx');
    }
}
