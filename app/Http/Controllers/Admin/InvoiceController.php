<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Validator;

class InvoiceController extends Controller
{
    public function invoiceList()
    {
        $invoices = Invoice::with('beneficiaries')->get();
        return view('admin.invoices.invoices', compact('invoices'));
    }

    public function invoice()
    { 
        $beneficiaries = Beneficiary::orderBy('beneficiary', 'asc')->with('projects')->get();
        return view('admin.invoices.invoices-create', compact('beneficiaries'));
    }

    public function invoiceView()
    {
        return view('admin.invoices.invoices-view');
    }

    public function invoiceCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'invoice_date' => 'required',
            'due_date'    => 'required',          
            'discount'    => 'required',          
            'description' => 'required',          'unit'         => 'required',
            'qty'         => 'required',          'price'        => 'required',
            'total'       => 'required',          'subtotal'     => 'required',
            'grandtotal'   => 'required',
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
        //   dd($request->all());
            $invoice = new Invoice();
            $invoice->invoice_id     = $request->invoice_id;
            $invoice->beneficiary_id = $request->beneficiary_id;
            $invoice->project_id     = $request->project_id;
            $invoice->invoice_date   = $request->invoice_date;
            $invoice->due_date       = $request->due_date;
            $invoice->subtotal       = $request->subtotal;
            $invoice->discount       = $request->discount;
            $invoice->grandtotal       = $request->grandtotal;
            $invoice->save();
            
           
            foreach($request->qty as $key=>$value)
            {
                $invoiceItems = new InvoiceItem([
                    'invoice_id'     => $invoice->id,
                    'beneficiary_id' => $request->beneficiary_id,
                    'description'  => $request->description[$key],
                    'unit'        => $request->unit[$key],
                    'qty'         => $request->qty[$key],
                    'price'        => $request->price[$key],
                    'total'      => $request->total[$key]  
                ]);
                $invoiceItems->save();
            }
            session()->flash('success', 'Invoice Created Successfully');
            return redirect()->route('invoices');
      }
    }
}
