<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reimbursement;
use App\Models\ReimbursementItem;
use App\Models\ExpensePayment;
use App\Models\Expense;
use DateTime, Validator;

class ReimbursementController extends Controller
{
      
    public function reimbursement()
    {
        $reimbursement = Reimbursement::orderBy('id', 'desc')->get();
        return view('admin.reimbursement.reimbursement', compact('reimbursement'));
    }

    public function reimbursementCreate()
    {
        return view('admin.reimbursement.reimbursement-create');
    }

     public function reimbursementCreatePost(Request $request)
     {
        $validate = Validator::make($request->all(),[
            'reimbursement_date'  => 'required',  'remarks'  => 'required',
            'subtotal'  => 'required',  'others'  => 'required',
            'grandtotal'  => 'required',
          ]);
    
          if($validate->fails())
          {
            return redirect()->back()->withErrors($validate)->withInput();
          }
          else
          {
            $reimbursementDate = DateTime::createFromFormat('d/m/Y', $request->reimbursement_date)->format('Y-m-d');
            $reimbursement = new Reimbursement();
            $reimbursement->reimbursement_date = $reimbursementDate;
            $reimbursement->remarks = $request->remarks;
            $reimbursement->subtotal = $request->subtotal;
            $reimbursement->others = $request->others;
            $reimbursement->grandtotal = $request->grandtotal;
            $reimbursement->total_payment = $request->total_payment;
            $reimbursement->save();
          }

        if($reimbursement)
        {
            foreach($request->total as $key=>$item)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');
                $dataItem  = new ReimbursementItem();
                $dataItem->reimbursement_id = $reimbursement->id;
                $dataItem->description = $request->description[$key];
                $dataItem->date = $date;
                $dataItem->employee_name = $request->employee_name[$key];
                $dataItem->total = $request->total[$key];
                $dataItem->save();
            }

            foreach($request->amount as $value=>$item)
            {
               $paymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$value])->format('Y-m-d');
               $paymentMode = $request->payment_mode[$value];
               $bankName = null;

               if($paymentMode == 'Cheque' && isset($request->chequeBankName[$value]))
               {
                $bankName = $request->chequeBankName[$value];
               }
               elseif($paymentMode == 'Online' && isset($request->onlineBankName[$value]))
               {
                 $bankName = $request->onlineBankName[$value];
               }

               $payment = new ExpensePayment();
               $payment->expense_type_id = $reimbursement->id;
               $payment->expense_type = $request->expense_type;
               $payment->payment_mode = $request->payment_mode[$value];
               $payment->payment_date = $paymentDate;
               $payment->amount = $request->amount[$value];
               $payment->cheque_number = $request->cheque_number[$value];
               $payment->bank_name = $bankName;
               $payment->receivable_by = $request->receivable_by[$value];
               $payment->transaction_id = $request->transaction_id[$value];
               $payment->save();
            }

            if($payment)
            {
                $expense = new Expense();
                $expense->expense_type_id = $reimbursement->id;
                $expense->expense_type = $request->expense_type;
                $expense->grandtotal = $request->grandtotal;
                $expense->save();

                session()->flash('success', 'Data Created Successfully');
                return redirect()->route('reimbursement');
            }
        }  

        session()->flash('error', 'Something Went Wrong!');
        return redirect()->back();
     }
 
    public function reimbursementView($id)
    {
        $reimbursement = Reimbursement::find($id);
        if($reimbursement)
        {
            return view('admin.reimbursement.reimbursement-view', compact('reimbursement'));
        }
    }

    public function reimbursementEdit($id)
    {
        $reimbursement = Reimbursement::with('reimbursementItems')->find($id);
        $payments = ExpensePayment::where('expense_type', 'electricity')->where('expense_type_id', $id)->get();
        return view('admin.reimbursement.reimbursement-edit', compact('reimbursement', 'payments'));
    }

    public function reimbursementDelete($id)
    {
      $reimbursement = Reimbursement::find($id);
      if($reimbursement)
      {
        $reimbursement->reimbursementItems()->delete();
        $reimbursementPayment = ExpensePayment::where('expense_type', 'reimbursement')->where('expense_type_id', $id)->delete();
        $expense = Expense::where('expense_type', 'reimbursement')->where('expense_type_id', $id)->delete();

        $reimbursement->delete();

        session()->flash('success', 'Data Deleted Sucsessfully');
        return redirect()->back();
      }
        session()->flash('error', 'Something Went Wrong!');
        return redirect()->back();
    }
    
}
