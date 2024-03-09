<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AccountImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Validator;
use DateTime;
use DataTables;
use \Carbon\Carbon;

class AccountController extends Controller
{
    public function accounts()
{
    $accounts = Account::all()->map(function($item){
        $item->amount_deposited = preg_match('/[\d,]+\.\d+/', $item->amount_deposited, $matchesDeposited) ? floatval(str_replace(',', '', $matchesDeposited[0])) : 0;

        $item->amount_withdrawn = preg_match('/[\d,]+\.\d+/', $item->amount_withdrawn, $matchedWithdrawn) ? floatval(str_replace(',', '', $matchedWithdrawn[0])) : 0;

        return $item;
    });

    $totalDeposited = $accounts->sum('amount_deposited');
    $totalWithdrwan = $accounts->sum('amount_withdrawn');

    return view('admin.accounts.accounts', compact('accounts', 'totalDeposited', 'totalWithdrwan'));
}


    public function accountCreate()
    {
        return view('admin.accounts.accounts-create');
    }

    public function accountReportCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'project_id' => 'required',
            'date'  => 'required',  'cheque_number_receipt_number' => 'required',
            'description'  => 'required',    'beneficiary'  => 'required',
            'amount_deposited' => 'required', 'amount_withdrawn'  => 'required',
            'project_name'  => 'required',  'column_1'  => 'required',
            'column_2'  => 'required',  'service_type'  => 'required',
            'remarks'  => 'required',  'total_in_account' => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $date = DateTime::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

            $accounts = new Account();
            $accounts->date = $date;
            $accounts->project_id = $request->project_id;
            $accounts->cheque_number_receipt_number = $request->cheque_number_receipt_number;
            $accounts->description = $request->description;
            $accounts->beneficiary = $request->beneficiary;
            $accounts->amount_deposited = sprintf("%.3f", $request->amount_deposited);
            $accounts->amount_withdrawn = sprintf("%.3f", $request->amount_withdrawn);
            $accounts->project_name = $request->project_name;
            $accounts->service_type = $request->service_type;
            $accounts->column_1 = $request->column_1;
            $accounts->column_2 = $request->column_2;
            $accounts->remarks = $request->remarks;
            $accounts->total_in_account = $request->total_in_account;
            $accounts->save();

            session()->flash('success', 'Account Report Created Successfully');
            return redirect()->route('accounts');
        }
    }

    public function accountsView($id)
    {
        $accounts = Account::find($id);
        return view('admin.accounts.accounts-view', compact('accounts'));
    }

    public function accountEdit($id)
    {
        $accounts = Account::find($id);
        return view('admin.accounts.accounts-edit', compact('accounts'));
    }

    public function accountUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'project_id' => 'required',
            'date'  => 'required',  'cheque_number_receipt_number' => 'required',
            'description'  => 'required',    'beneficiary'  => 'required',
            'amount_deposited' => 'required', 'amount_withdrawn'  => 'required',
            'project_name'  => 'required',  'column_1'  => 'required',
            'column_2'  => 'required',  'service_type'  => 'required',
            'remarks'  => 'required',  'total_in_account' => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $accounts = Account::find($id);
            if($accounts)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
                $accounts->update([
                    'project_id'  => $request->project_id,
                    'date'  => $date,
                    'cheque_number_receipt_number'  => $request->cheque_number_receipt_number,
                    'description'  => $request->description,
                    'beneficiary'  => $request->beneficiary,
                    'amount_deposited'  => sprintf("%.3f", $request->amount_deposited),
                    'amount_withdrawn'  => sprintf("%.3f", $request->amount_withdrawn),
                    'project_name'  => $request->project_name,
                    'column_1'  => $request->column_1,
                    'column_2'  => $request->column_2,
                    'service_type'  => $request->service_type,
                    'remarks'  => $request->remarks,
                    'total_in_account'  => $request->total_in_account,
                ]);

                session()->flash('success', 'Data Updated Successfully');
                return redirect()->route('accounts');
            }
        }
    }

    public function accountDelete($id)
    {
        $accounts = Account::find($id);
        if($accounts)
        {
            $accounts->delete();

            session()->flash('success', 'Data Deleted Successfully');
            return redirect()->back();
        }
    }

    public function accountsImport(Request $request)
    {
        $validate = Validator::make($request->all(), [
          'file' => 'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $file = $request->file('file');
            Excel::import(new AccountImport, $file);

            return back()->with('success', 'Uploaded Successfully.');
        }
    }

    public function accountReportSearchBydate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'start_date' => 'required',  'end_date'  => 'required'
        ]);
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{

            $accounts = Account::all()->map(function($item){
                $item->amount_deposited = preg_match('/[\d,]+\.\d+/', $item->amount_deposited, $matchesDeposited) ? floatval(str_replace(',', '', $matchesDeposited[0])) : 0;
        
                $item->amount_withdrawn = preg_match('/[\d,]+\.\d+/', $item->amount_withdrawn, $matchedWithdrawn) ? floatval(str_replace(',', '', $matchedWithdrawn[0])) : 0;
        
                return $item;
            });
        
            $totalDeposited = $accounts->sum('amount_deposited');
            $totalWithdrwan = $accounts->sum('amount_withdrawn');

            $startDate = Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
            $endDate = Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');
    
            $accounts = Account::whereDate('date', '>=', $startDate)
                                ->whereDate('date', '<=', $endDate)
                                ->get();

            return view('admin.accounts.accounts', compact('accounts', 'totalDeposited', 'totalWithdrwan'));
        }
    }
}
