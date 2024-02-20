<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Validator;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;

class InvoiceController extends Controller
{
    public function invoiceList()
    {
        $invoices = Invoice::orderBy('id', 'desc')->get();
        return view('admin.invoices.invoices', compact('invoices'));
    }

    public function invoice()
    { 
        // $beneficiaries = Beneficiary::orderBy('beneficiary', 'asc')->with(['projects', 'invoices'])->get();
        $lastInvoice = Invoice::orderBy('id', 'desc')->first();
        $nextInvoiceId = $lastInvoice ? $lastInvoice->id + 1: 1;

        return view('admin.invoices.invoices-create', compact('nextInvoiceId'));
    }

    public function invoiceView($id)
    {
        $invoices = Invoice::where('id', $id)->with(['invoiceItems'])->first();

        return view('admin.invoices.invoices-view', compact('invoices'));
    }

    public function downloadInvoicePDF($id)
    {
        $invoices = Invoice::where('id', $id)->with(['invoiceItems'])->first();
        $pdf = PDF::loadView('admin.invoices.invoices-pdf', compact('invoices'))->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('INV#'. $invoices->id. '.pdf');
    }

    public function invoicePdfView($id)
    {
        $invoices = Invoice::where('id', $id)->with(['invoiceItems'])->first();

        return view('admin.invoices.invoices-pdf', compact('invoices'));
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

            $invoice = new Invoice();
            $invoice->invoice_number     = $request->invoice_number;
            $invoice->beneficiary_id      = $request->beneficiary_id;
            $invoice->project_id           = $request->project_id;
            $invoice->invoice_date          = $request->invoice_date;
            $invoice->due_date             = $request->due_date;
            $invoice->subtotal            = $request->subtotal;
            $invoice->discount          = $request->discount;
            $invoice->grandtotal       = $request->grandtotal;
            $invoice->save();
            
           
            foreach($request->qty as $key=>$value)
            {
                $invoiceItems = new InvoiceItem([
                    'invoice_id'        => $invoice->id,
                    'beneficiary_id'   => $request->beneficiary_id,
                    'description'     => $request->description[$key],
                    'unit'           => $request->unit[$key],
                    'qty'           => $request->qty[$key],
                    'price'        => $request->price[$key],
                    'total'       => $request->total[$key]  
                ]);
                $invoiceItems->save();
            }
            session()->flash('success', 'Invoice Created Successfully');
            return redirect()->route('invoices');
      }
    }

    public function searchInvoice(Request $request)
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

        $invoices = Invoice::whereDate('invoice_date', '>=', $startDate)
                            ->whereDate('invoice_date', '<=', $endDate)
                            ->get(); 
        if($invoices)
        {
            return view('admin.invoices.invoices', compact('invoices'));
        } 
    }
}
