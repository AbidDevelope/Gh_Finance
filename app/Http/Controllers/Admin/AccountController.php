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

    public function accountView()
    {
        return view('admin.accounts.accounts-view');
    }

    public function accountEdit()
    {
        return view('admin.accounts.accounts-edit');
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
