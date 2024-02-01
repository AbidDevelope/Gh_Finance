<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use Validator;

class ExpensesController extends Controller
{
    public function expensesList()
    {
        $data = Expense::all();
        return view('admin.expenses', compact('data'));
    }

    public function expensesCreate()
    {
        return view('admin.expenses-create');
    }

    public function expensesCreateData(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'date'           => 'required',   'project'          => 'required',
            'beneficiary'    => 'required',   'receipt'          => 'required',
            'amount_deposit' => 'required',   'amount_withdrawn' => 'required',
            'description'    => 'required'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();
            Expense::create($requestData);

            session()->flash('success', 'Expenses Created Successfully');
            return redirect()->route('expenses');
        }
        session()->flash('error', 'Something Went Wrong.');
        return redirect()->back();
    }

    public function expensesEdit($id)
    {
        $data = Expense::find($id);
        return view('admin.expenses-edit', compact('data'));
    }

    public function expensesUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'date'           => 'required',   'project'          => 'required',
            'beneficiary'    => 'required',   'receipt'          => 'required',
            'amount_deposit' => 'required',   'amount_withdrawn' => 'required',
            'description'    => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $expenses = Expense::where('id', $id)->first();
            $requestData = $request->all();

            $expenses->update($requestData);

            session()->flash('success', 'Expenses Updated Successfully.');
            return redirect()->route('expenses');
        }

        session()->flash('error', 'Something Went Wrong.');
        return redirect()->back();
    }

    public function expensesDelete($id)
    {
        Expense::find($id)->delete();

        session()->flash('success', 'Expenses Deleted Successfully');
        return redirect()->back();
    }
}
