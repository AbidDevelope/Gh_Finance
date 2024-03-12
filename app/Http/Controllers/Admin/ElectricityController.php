<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Electricity;
use App\Models\ElectricityItem;
use App\Models\ExpensePayment;
use App\Models\Expense;
use Validator, DateTime;

class ElectricityController extends Controller
{
    public function electricity()
    {
        $electricity = Electricity::all();
        return view('admin.electricity.electricity', compact('electricity'));
    }

    public function electricityCreate()
   {
       return view('admin.electricity.electricity-create');
   }

   public function electricityCreatePost(Request $request)
   {
    $validate = Validator::make($request->all(),[
        'electricity_date'  => 'required',  'remarks'  => 'required',
        'subtotal'  => 'required',  'others'  => 'required',
        'grandtotal'  => 'required',
      ]);

      if($validate->fails())
      {
        return redirect()->back()->withErrors($validate)->withInput();
      }
      else
      {
        $electricityDate = DateTime::createFromFormat('d/m/Y', $request->electricity_date)->format('Y-m-d');
        $data = new Electricity();
        $data->electricity_date = $electricityDate;
        $data->remarks = $request->remarks;
        $data->subtotal = $request->subtotal;
        $data->others = $request->others;
        $data->grandtotal = $request->grandtotal;
        $data->total_payment = $request->total_payment;
        $data->save();

        if($data)
        { 
            foreach($request->month as $key=>$item)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');
                $dueDate = DateTime::createFromFormat('d/m/Y', $request->due_date[$key])->format('Y-m-d');
                $itemData = new ElectricityItem([
                    'electricity_id' => $data->id,
                    'date' => $date,
                    'month' => $request->month[$key],
                    'unit' => $request->unit[$key],
                    'due_date' => $dueDate,
                    'total' => $request->total[$key],
                ]);
                $itemData->save();
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
                $payments = new ExpensePayment([
                   'expense_type_id'  => $data->id,
                   'expense_type'  => $request->expense_type,
                   'payment_mode'  => $request->payment_mode[$value],
                   'payment_date'  => $paymentDate,
                   'amount'        => $request->amount[$value],
                   'cheque_number'  => $request->cheque_number[$value],
                   'bank_name'      => $bankName,
                   'receivable_by'  => $request->receivable_by[$value],
                   'transaction_id'  => $request->transaction_id[$value],
                ]);
                $payments->save();
            }


            $expense = new Expense();
            $expense->expense_type_id = $data->id;
            $expense->expense_type = $request->expense_type;
            $expense->grandtotal = $request->grandtotal;
            $expense->save();
        }
      }
      session()->flash('success', 'Data Created Successfully');
      return redirect()->route('electricity');
   }

   public function electricityView()
    {
        return view('admin.electricity.electricity-view');
    }

   public function electricityEdit($id)
   {
       $electricity = Electricity::with('electricityItems')->find($id);
       $payments = ExpensePayment::where('expense_type', 'electricity')->where('expense_type_id', $id)->get();
    //    return $payments;
       return view('admin.electricity.electricity-edit', compact('electricity', 'payments'));
   }

   public function electricityUpdate(Request $request, $id)
   {
    $validate = Validator::make($request->all(),[
        'electricity_date'  => 'required',  'remarks'  => 'required',
        'subtotal'  => 'required',  'others'  => 'required',
        'grandtotal'  => 'required',
      ]);

      if($validate->fails())
      {
        return redirect()->back()->withErrors($validate)->withInput();
      }else{
        $electricity = Electricity::find($id);
        if($electricity)
        {
            $electricityDate = DateTime::createFromFormat('d/m/Y', $request->electricity_date)->format('Y-m-d');
            $electricity->update([
                'electricity_date' => $electricityDate,
                'remarks' => $request->remarks,
                'subtotal' => $request->subtotal,
                'others' => $request->others,
                'grandtotal' => $request->grandtotal,
                'total_payment' => $request->total_payment,
            ]);

            $electricityItemsData = $request->input('electricityItems', []);
            foreach($electricityItemsData as $itemId=>$itemData)
            {
                $electricityItems = ElectricityItem::find($itemId);
                if($electricityItems)
                {
                    $electricityItems->date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['date']);
                    $electricityItems->month = $itemData['month'];
                    $electricityItems->unit = $itemData['unit'];
                    $electricityItems->due_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['due_date']);
                    $electricityItems->total = $itemData['total'];
                    $electricityItems->save();
                }
            }

            $electricityPaymentdata = $request->input('paymentItems', []);
            foreach($electricityPaymentdata as $itemId=>$itemData)
            {
                $electricityPayment = ExpensePayment::find($itemId);
                if($electricityPayment)
                {
                    $electricityPayment->payment_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['payment_date']);
                    $electricityPayment->amount = $itemData['amount'];
                    $electricityPayment->cheque_number = $itemData['cheque_number'];
                    $electricityPayment->bank_name = $itemData['bank_name'];
                    $electricityPayment->receivable_by = $itemData['receivable_by'];
                    $electricityPayment->transaction_id = $itemData['transaction_id'];
                    $electricityPayment->save();
                }
            }

            // $expense = Expense::where('expense_type_id', $id)->get();
            // if($expense)
            // {
            //     $expense->update([
            //     'grandtotal' => $request->grandtotal,
            //    ]);
                
            // }
        }

        session()->flash('success', 'Data Updated Successfully');
        return redirect()->route('electricity');
      }
   }
    
}
