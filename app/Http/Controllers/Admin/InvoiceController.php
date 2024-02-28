<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Validator;
use DateTime;
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
            'invoice_number'  => 'required',     'project_id'  => 'required',
            'invoice_date'     => 'required',
            'due_date'         => 'required',          
            'discount'         => 'required',          
            'description'     => 'required',          'unit'         => 'required',
            'qty'              => 'required',          'price'        => 'required',
            'total'            => 'required',          'subtotal'     => 'required',
            'grandValue'      => 'required',
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{

            $invoiceDate = DateTime::createFromFormat('d/m/Y', $request->invoice_date)->format('Y-m-d');
            $dueDate  = DateTime::createFromFormat('d/m/Y', $request->due_date)->format('Y-m-d');

            $invoice = new Invoice();
            $invoice->invoice_number     = $request->invoice_number;
            $invoice->project_id           = $request->project_id;
            $invoice->invoice_date          = $invoiceDate;
            $invoice->due_date             = $dueDate;
            $invoice->subtotal            = $request->subtotal;
            $invoice->discount          = $request->discount;
            $invoice->grandValue       = $request->grandValue;
            $invoice->save();
            
           
            foreach($request->qty as $key=>$value)
            {
                $invoiceItems = new InvoiceItem([
                    'invoice_id'        => $invoice->id,
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

    public function invoiceEdit($id)
    {
        $invoices = Invoice::with(['invoiceItems', 'project'])->findOrFail($id);
        return view('admin.invoices.invoices-edit', compact('invoices'));
    }

    public function invoiceUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'invoice_number'  => 'required',      'project_id'  => 'required',
            'invoice_date'     => 'required',
            'due_date'         => 'required',          
            'discount'         => 'required',          
            'description.*'     => 'required',      'unit.*'         => 'required',
            'qty.*'              => 'required',     'price.*'        => 'required',
            'total.*'            => 'required',     'subtotal'     => 'required',
            'grandValue'      => 'required',
        ]);
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $data = $request->input('items', []);

            $invoiceDate = DateTime::createFromFormat('d/m/Y', $request->invoice_date)->format('Y-m-d');
            $dueDate  = DateTime::createFromFormat('d/m/Y', $request->due_date)->format('Y-m-d');

            $invoices = Invoice::find($id);
            $invoices->invoice_number = $request->invoice_number;
            $invoices->project_id = $request->project_id;
            $invoices->invoice_date = $invoiceDate;
            $invoices->due_date = $dueDate;
            $invoices->subtotal = $request->subtotal;
            $invoices->discount = $request->discount;
            $invoices->grandValue = $request->grandValue;
            $invoices->save();


            foreach($data as $itemId=>$itemData)
            {
                $invoiceItems = InvoiceItem::find($itemId);
                if($invoiceItems)
                {
                    $invoiceItems->description = $itemData['description'];
                    $invoiceItems->unit  = $itemData['unit'];
                    $invoiceItems->qty = $itemData['qty'];
                    $invoiceItems->price  = $itemData['price'];
                    $invoiceItems->total = $itemData['total'];
                    $invoiceItems->save();
                }
            }
            session()->flash('success', 'Invoice Updated Successfully.');
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

    public function invoiceDelete($id)
    {
        $invoices = Invoice::find($id);
        $invoices->invoiceItems()->delete();

        $invoices->delete();

        session()->flash('success', 'Invoices Deleted Successfully.');
        return redirect()->back();
    }

    public function getProjectData($id)
    {
        $projects = Project::find($id);

        if($projects)
        {
            return response()->json([
                'status' => 'success',
                'data'  => $projects,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'data' => 'Project Not Found',
            ]);
        }
    }
}
