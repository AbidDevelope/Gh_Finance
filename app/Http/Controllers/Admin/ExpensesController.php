<?php

namespace App\Http\Controllers\admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExpensesImport;
use App\Exports\MiscellaneousExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseItem;
use App\Models\PettyCash;
use App\Models\Project;
use App\Models\Miscellaneous;
use App\Models\MiscellaneousItem;
use App\Models\Payroll;
use App\Models\PayrollItem;
use App\Models\PayrollPayment;
use Validator;
use Carbon\Carbon;
use DateTime;

class ExpensesController extends Controller
{
    public function miscellaneous()
    {
        $miscell = Miscellaneous::orderBy('id', 'desc')->with('miscellaneousItems')->get();
        // return $miscell;
        return view('admin.miscellaneous.miscellaneous', compact('miscell'));
    }

    public function miscellaneousCreateForm()
    {
        return view('admin.miscellaneous.miscellaneous-create');
    }

    public function miscellaneousCreate(Request $request)
    {
       $validate = Validator::make($request->all(), [
        'description.*' => 'required',         'month' => 'required',
        'date.*'        => 'required',         'total.*' => 'required',
        'subtotal'    => 'required',         'others' => 'required',
        'grandtotal'  => 'required',
       ]);

       if($validate->fails())
       {
        return redirect()->back()->withErrors($validate)->withInput();
       }

       $requestData = $request->all();

      $miscellaneous =  Miscellaneous::create($requestData);

      if($miscellaneous)
      {
        foreach($request->month as $key=>$value)
        {
            $formattedDate = \Carbon\Carbon::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');

            $miscellaneousItems = new MiscellaneousItem([
                'miscellaneous_id' => $miscellaneous->id,
                'description'   => $request->description[$key],
                'month'     => $request->month[$key],
                'date'    => $formattedDate,
                'total'   => $request->total[$key],
            ]);
            $miscellaneousItems->save();
        }

        $expenses = new Expense();
        $expenses->expense_type = $request->expense_type;
        $expenses->grandtotal = $request->grandtotal;
        $expenses->save();
      }
       session()->flash('success', 'Created Successfully');
       return redirect()->route('miscellaneous');
    }

    public function miscellaneousView($id)
    {
        $miscell = Miscellaneous::where('id', $id)->with('miscellaneousItems')->first();
        return view('admin.miscellaneous.miscellaneous-view', compact('miscell'));
    }

    public function miscellaneousEdit($id)
    {
        $miscellaneous = Miscellaneous::with('miscellaneousItems')->findOrFail($id); 

        return view('admin.miscellaneous.miscellaneous-edit', compact('miscellaneous'));
    }


    public function miscellaneousUpdate(Request $request, $id)
    {
        $data = $request->input('items', []);
        $miscellaneousData = $request->all();

        $miscellaneous = Miscellaneous::find($id);
        if($miscellaneous)
        {
            $miscellaneous->update($miscellaneousData);
        }

        foreach ($data as $itemId => $itemData) {
            $item = MiscellaneousItem::find($itemId);

            if ($item) {
                $item->description = $itemData['description'];
                $item->month = $itemData['month'];
                $item->date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['date']);
                $item->total = $itemData['total'];
                $item->save();
            }
        }

        return redirect()->route('miscellaneous')->with('success', 'Miscellaneous items updated successfully.');
    }

    public function miscellaneousDelete($id)
    {
        $miscellaneous = Miscellaneous::find($id);
        if($miscellaneous)
        {
            $miscellaneous->miscellaneousItem()->delete();
            $miscellaneous->delete();
        }

        session()->flash('success', 'Deleted Successfully.');
        return redirect()->back();
    }

    // ===================    Petty Cash ==================== ////

    public function pettyCash()
    {
        $expenses = PettyCash::all();
        // return $expenses;
        return view('admin.pettyCash.pettyCash', compact('expenses'));
    }

    public function pettyCashCreateForm()
    {
        return view('admin.pettyCash.pettyCash-create');
    }

    public function projectDataGet($id)
    {
       $projects = Project::find($id);

       if($projects)
       {
        return response()->json([
            'status' => 'success',
            'data'   => $projects,
        ]);
       }
    }

    public function expensesCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'project_id'  => 'required', 'description.*'   => 'required',
            'month'         => 'required', 'date'           => 'required',
            'receipt'         => 'required', 'amount_deposite' => 'required',
            'amount_withdrawn'  => 'required', 'beneficiary'      => 'required',
            'total'               => 'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{

        $requestData = $request->all();
        $expense = new Expense();
        $expense->project_id = $request->project_id;
        $expense->month = $request->month;

        $convertedDate = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $expense->date = $convertedDate;

        $expense->beneficiary = $request->beneficiary;
        $expense->subtotal = $request->subtotal;
        $expense->others = $request->others;
        $expense->grandtotal = $request->grandtotal;
        $expense->save();

            if($expense)
            {
              foreach($request->total as $key=>$item)
              {
                $expenseItems = new ExpenseItem([
                    'expenses_id'  => $expense->id,
                    'description' => $request->description[$key],
                    // 'date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d'),
                    'receipt'  => $request->receipt[$key],
                    'amount_deposite' => $request->amount_deposite[$key],
                    'amount_withdrawn'  => $request->amount_withdrawn[$key],
                    'total' => $request->total[$key],
                ]);
                $expenseItems->save();
              }
            }
            session()->flash('success', 'Expenses Created Successfully');
            return redirect()->route('pettyCash');
        }
    }

    public function expensesView($id)
    {
       $expenses = PettyCash::find($id);
       return view('admin.pettyCash.pettyCash-view', compact('expenses'));
    }

    public function expensesEdit($id)
    {
       $expenses = Expense::with('expenseItem')->findOrFail($id);
    //    return $expenses;
       return view('admin.pettyCash.expenses-edit', compact('expenses'));
    }

    public function expensesUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'project_id'  => 'required',
            'items.*.description' => 'required',
            'month.*'     => 'required',
            'items.*.date' => 'required|date_format:d/m/Y',
            'items.*.receipt' => 'required',
            'items.*.amount_deposite' => 'required|numeric',
            'items.*.amount_withdrawn' => 'required|numeric',
            'items.*.beneficiary' => 'required',
            'items.*.total' => 'required|numeric',
            'subtotal' => 'required',  'others' => 'required',
            'grandtotal'  => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
           $data = $request->input('items', []);
        //    dd($data);
           $requestData = $request->all();

           $expense = Expense::find($id);
           if($expense)
           {
              $expense->update($requestData);
           }

           foreach($data as $itemId=>$itemData)
           {
              $items = ExpenseItem::find($itemId);
              if($items)
              {
                $items->description = $itemData['description'];
                $items->month = $itemData['month'];
                $items->date  = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['date']);
                $items->receipt  = $itemData['receipt'];
                $items->amount_deposite = $itemData['amount_deposite'];
                $items->amount_withdrawn = $itemData['amount_withdrawn'];
                $items->beneficiary  = $itemData['beneficiary'];
                $items->total  =  $itemData['total'];
                $items->save();
              }
           }
           session()->flash('success', 'Expenses Updated Successfully.');
           return redirect()->route('pettyCash');
        }
    }

    public function searchFilter(Request $request)
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

        $expenses = PettyCash::whereDate('date', '>=', $startDate)->whereDate('date', '<=', $endDate)->get();

        return view('admin.pettyCash.pettyCash', compact('expenses'));



        $miscell = Miscellaneous::whereBetween('created_at', [$startDate, $endDate])->get();
        if($miscell)
        {
            return view('admin.miscellaneous.miscellaneous', compact('miscell'));
        }

        }

    public function searchMiscellaneous(Request $request)
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


        $miscell = Miscellaneous::whereBetween('created_at', [$startDate, $endDate])->get();
        if($miscell)
        {
            return view('admin.miscellaneous.miscellaneous', compact('miscell'));
        }
    }

    public function expensesDelete($id)
    {
        $exepenses = Expense::find($id);

        if($exepenses)
        {
            $exepenses->expenseItem()->delete();
            $exepenses->delete();
        }
        session()->flash('success', 'Expenses Deleted Successfully.');
        return redirect()->back();
    }

    public function pettyCashImport(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'file'   => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $file = $request->file('file');
        Excel::import(new ExpensesImport, $file);

        return back()->with('success', 'Imported successfully.');
    }

    public function pettyCashPost(Request $request)
    {

        $date = DateTime::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

        $pettyCash = new PettyCash();
        $pettyCash->date = $date; 
        $pettyCash->project_id = $request->project_id;
        $pettyCash->cheque_number_receipt_number = $request->cheque_number_receipt_number;
        $pettyCash->description = $request->description;
        $pettyCash->beneficiary = $request->beneficiary;
        $pettyCash->amount_deposited = $request->amount_deposited;
        $pettyCash->amount_withdrawn = $request->amount_withdrawn;
        $pettyCash->project_name = $request->project_name;
        $pettyCash->total_amount_deposited = $request->total_amount_deposited;
        $pettyCash->total_amount_withdrawn = $request->total_amount_withdrawn;
        $pettyCash->total_in_account = $request->total_in_account;
        $pettyCash->save();

        session()->flash('success', 'Data Submitted Successfully.');
        return redirect()->route('pettyCash');

    }

    public function miscellaneousExport()
    {
    //    dd('wewer');
        return Excel::download(new MiscellaneousExport, 'miscellaneous.xlsx');
    }

    // Payroll Controller Start
    public function payroll()
    {
        $payrollItems = PayrollItem::all();
        return view('admin.payroll.payroll', compact('payrollItems'));
    }

    public function payrollCreate()
    {
        return view('admin.payroll.payroll-create');
    }

    public function payrollCreatePost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'remarks' => 'required',    'subtotal'  => 'required',
            'grandtotal' => 'required', 'total_payment'  => 'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $payroll = new Payroll();
        $payroll->remarks = $request->remarks;
        $payroll->subtotal = $request->subtotal;
        $payroll->others = $request->others;
        $payroll->grandtotal = $request->grandtotal;
        $payroll->total_payment = $request->total_payment;
        $payroll->save();

        if($payroll)
        {
            foreach($request->month as $key=>$item)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');

                $payrollItems = new PayrollItem([
                    'payroll_id' => $payroll->id,
                    'date'       => $date,
                    'month'      => $request->month[$key],
                    'employee_name' => $request->employee_name[$key],
                    'actual_salary' => $request->actual_salary[$key],
                    'payroll' => $request->payroll[$key],
                    'salary' => $request->salary[$key],
                ]);
                $payrollItems->save();
            }

            foreach($request->amount as $key=>$item)
            {
                $paymentDate = DateTime::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');
                $payrollPayment = new PayrollPayment([
                    'payroll_id' => $payroll->id,
                    'payment_mode'  => $request->payment_mode[$key],
                    'date'       => $paymentDate,
                    'amount'     => $request->amount[$key],
                    'cheque_number'  => $request->cheque_number[$key],
                    'bank_name'      => $request->bank_name[$key],
                    'receivable_by'  => $request->receivable_by[$key],
                    'transaction_id'  => $request->transaction_id[$key],
                ]);
                $payrollPayment->save();
            }
        }
        return redirect()->route('payroll')->with('success', 'Payroll Created Successfully');
    }

    public function payrollView($id)
    {
        $payrollItems = PayrollItem::where('payroll_id', $id)->first();
        return view('admin.payroll.payroll-view', compact('payrollItems'));
    }

    public function payrollEdit()
    {
        return view('admin.payroll.payroll-edit');
    }

    public function payrollDelete($id)
    {
        $payrollItems = PayrolllItem::find($id);

        session()->flash('success', 'Payroll Deleted Successfully');
        return redirect()->back();
    }
    // Payroll Controller End

     // Rent Controller Start
     public function rent()
     {
         return view('admin.rent.rent');
     }

     public function rentCreate()
    {
        return view('admin.rent.rent-create');
    }

    public function rentView()
     {
         return view('admin.rent.rent-view');
     }

    public function rentEdit()
    {
        return view('admin.rent.rent-edit');
    }
     // Rent Controller End

     // Electricity Controller Start
     public function electricity()
     {
         return view('admin.electricity.electricity');
     }

     public function electricityCreate()
    {
        return view('admin.electricity.electricity-create');
    }

    public function electricityView()
     {
         return view('admin.electricity.electricity-view');
     }

    public function electricityEdit()
    {
        return view('admin.electricity.electricity-edit');
    }
     // Electricity Controller End

     // Others Controller Start
     public function others()
     {
         return view('admin.others.others');
     }

     public function othersCreate()
    {
        return view('admin.others.others-create');
    }

    public function othersView()
     {
         return view('admin.others.others-view');
     }

    public function othersEdit()
    {
        return view('admin.others.others-edit');
    }
     // Others Controller End
}
