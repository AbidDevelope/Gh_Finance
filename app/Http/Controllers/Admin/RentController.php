<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\RentItem;
use App\Models\ExpensePayment;
use App\Models\Expense;
use DateTime, Validator;

class RentController extends Controller
{
    
    public function rent()
    {
        $rents = Rent::all();
        return view('admin.rent.rent', compact('rents'));
    }

    public function rentCreate()
   {
       return view('admin.rent.rent-create');
   }

   public function rentCreatePost(Request $request)
   {
      $validate = Validator::make($request->all(),[
        'rent_date'  => 'required',  'remarks'  => 'required',
        'subtotal'  => 'required',  'others'  => 'required',
        'grandtotal'  => 'required',
      ]);

      if($validate->fails())
      {
        return redirect()->back()->withErrors($validate)->withInput();
      }else{
        $rentDate = DateTime::createFromFormat('d/m/Y', $request->rent_date)->format('Y-m-d');
        $rent = new Rent();
        $rent->rent_date = $rentDate;
        $rent->remarks = $request->remarks;
        $rent->subtotal = $request->subtotal;
        $rent->others = $request->others;
        $rent->grandtotal = $request->grandtotal;
        $rent->total_payment = $request->total_payment;
        $rent->save();

        if($rent)
        {
            foreach($request->rent_amount as $key=>$item)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d');

                $rentItem = new RentItem([
                'rent_id'  => $rent->id,
                'year'  => $request->year[$key],
                'month'  => $request->month[$key],
                'date'  => $date,
                'rent_amount'  => $request->rent_amount[$key],
                'used_by'  => $request->used_by[$key],
                'total'  => $request->total[$key],
                ]);
                $rentItem->save();
            }

            foreach($request->amount as $value=>$item)
            {
                $paymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$value])->format('Y-m-d');
                
                $paymentMode = $request->payment_mode[$value];
                $bankName = null; 

                if ($paymentMode == 'Cheque' && isset($request->chequeBankName[$value])) {
                    $bankName = $request->chequeBankName[$value];
                } elseif ($paymentMode == 'Online' && isset($request->onlineBankName[$value])) {
                    $bankName = $request->onlineBankName[$value];
                 }

                $rentPayment = new ExpensePayment([
                    'expense_type_id' => $rent->id,
                    'expense_type' => $request->expense_type,
                    'payment_mode'  => $request->payment_mode[$value],
                    'payment_date'       => $paymentDate,
                    'amount'     => $request->amount[$value],
                    'cheque_number'  => $request->cheque_number[$value],
                    'bank_name'      => $bankName,
                    'receivable_by'  => $request->receivable_by[$value],
                    'transaction_id'  => $request->transaction_id[$value],
                ]);
                $rentPayment->save();
            }

            $expenses = new Expense();
            $expenses->expense_type_id = $rent->id; 
            $expenses->expense_type = $request->expense_type; 
            $expenses->grandtotal = $request->grandtotal; 
            $expenses->save(); 
        }

        session()->flash('success', 'Rent Created Successfully.');
        return redirect()->route('rent');
      }
   }

   public function rentView($id)
    {
        $rents = Rent::find($id);
        return view('admin.rent.rent-view', compact('rents'));
    }

   public function rentEdit($id)
   {
       $rents = Rent::with(['rentItems', 'rentPayment'])->find($id);
       $currentYear = now()->year;
       $years = range($currentYear, $currentYear-10);
    //    return $rents;
       return view('admin.rent.rent-edit', compact('rents', 'years'));
   }

   public function rentUpdate(Request $request, $id)
   {
    $validate = Validator::make($request->all(),[
        'rent_date'  => 'required',  'remarks'  => 'required',
        'subtotal'  => 'required',  'others'  => 'required',
        'grandtotal'  => 'required',
      ]);

      if($validate->fails())
      {
        return redirect()->back()->withErrors($validate)->withInput();
      }else{
        $rents = Rent::find($id);
        if($rents)
        {
            $rentDate = DateTime::createFromFormat('d/m/Y', $request->rent_date)->format('Y-m-d');
            $rents->update([
                'rent_date' => $rentDate,
                'remarks' => $request->remarks,
                'subtotal' => $request->subtotal,
                'others' => $request->others,
                'grandtotal' => $request->grandtotal,
                'total_payment' => $request->total_payment,
            ]);

            $rentItemsData = $request->input('rentItems', []);
            foreach($rentItemsData as $itemId=>$itemData)
            {
                $rentItems = RentItem::find($itemId);
                if($rentItems)
                {
                    $rentItems->year = $itemData['year'];
                    $rentItems->month = $itemData['month'];
                    $rentItems->date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['date']);
                    $rentItems->rent_amount = $itemData['rent_amount'];
                    $rentItems->used_by = $itemData['used_by'];
                    $rentItems->total = $itemData['total'];
                    $rentItems->save();
                }
            }

            $rentPaymentdata = $request->input('paymentItems', []);
            foreach($rentPaymentdata as $itemId=>$itemData)
            {
                $rentPayment = ExpensePayment::find($itemId);
                if($rentPayment)
                {
                    $rentPayment->payment_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['payment_date']);
                    $rentPayment->amount = $itemData['amount'];
                    $rentPayment->cheque_number = $itemData['cheque_number'];
                    $rentPayment->bank_name = $itemData['bank_name'];
                    $rentPayment->receivable_by = $itemData['receivable_by'];
                    $rentPayment->transaction_id = $itemData['transaction_id'];
                    $rentPayment->save();
                }
            }

            $expense = Expense::where('expense_type_id', $id)->first();
            if($expense)
            {
                $expense->update([
                'grandtotal' => $request->grandtotal,
               ]);
                
            }
        }

        session()->flash('success', 'Rent Updated Successfully');
        return redirect()->route('rent');
      }
   }

   public function rentDelete($id)
   {
      $rents = Rent::find($id);
      if($rents)
      {
        $rents->rentItems()->delete();
        $rents->rentPayment()->delete();
        $rents->expenses()->delete();
        $rents->delete();
      }

      session()->flash('success', 'Rent Deleted Successfully');
      redirect()->back();
   }
}
