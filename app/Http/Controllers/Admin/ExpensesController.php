<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Project;
use App\Models\ProjectManager;
use Validator;

class ExpensesController extends Controller
{
    public function expensesList()
    {
        $data = Expense::where('project_type', '!=', 'Others')->get();
        return view('admin.expenses.expenses', compact('data'));
    }

    public function expensesCreate()
    {
        $projects = Project::orderBy('type', 'asc')->get();
        $projectManagers = ProjectManager::all();
        // return $projects;
        return view('admin.expenses.expenses-create', compact('projects', 'projectManagers'));
    }

    public function expensesCreateData(Request $request)
    {
        // $validate = Validator::make($request->all(), [
        //     'project'     => 'required|string|max:255' ,  'receipt'        => 'required|string|max:255',
        //     'beneficiary' => 'required|string|max:255' ,  'amount_deposite'  => 'required|string|max:255',
        //     'amount_withdraw'   => 'required|string|max:255' ,  'description'         => 'required|string|max:255',
        // ]);
        $requestData = $request->all();

        Expense::create($requestData);
            
        session()->flash('success', 'Expense Created Successfully');
        return redirect()->route('expenses');

        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate)->withInput();
        // }else{
        //     $requestData = $request->all();

            // if ($request->hasFile('attachments')) {
            //     $file = $request->file('attachments');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
               
            //     $file->move(public_path('uploads/expenses'), $fileName); 
            
            //     $requestData['attachments'] = $fileName; 
            // }
            
        //     Expense::create($requestData);
            
        //     session()->flash('success', 'Expense Created Successfully');
        //     return redirect()->route('expenses');
        // }
        // session()->flash('error', 'Something Went Wrong.');
        // return redirect()->back();
    }

    public function expensesView($id)
    {
        $expenses = Expense::find($id);
        return view('admin.expenses.expenses-view', compact('expenses'));
    }

    public function expensesEdit($id)
    {
        $data = Expense::find($id);
        return view('admin.expenses.expenses-edit', compact('data'));
    }

    public function expensesUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'item_name'     => 'required|string|max:255' ,  'project'        => 'required|string|max:255',
            'purchase_from' => 'required|string|max:255' ,  'purchase_date'  => 'required|string|max:255',
            'purchase_by'   => 'required|string|max:255' ,  'amount'         => 'required|string|max:255',
            'paid_by'       => 'required|string|max:255' ,  'description'   => 'required|string|max:255' , 
            'status'        => 'required|string|max:255',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $expenses = Expense::where('id', $id)->first();
            $requestData = $request->all();

            if($request->hasFile('attachments'))
            {
                $file = $request->file('attachments');
                $extension = $file->getClientOriginalExtension();
                $fileName = time(). '.' . $extension;
                $file->move(public_path('uploads/expenses'), $fileName);
                $requestData['attachments'] = $fileName;
            }

            $expenses->update($requestData);

            session()->flash('success', 'Expenses Updated Successfully.');
            return redirect()->route('expenses');
        }

        session()->flash('error', 'Something Went Wrong.');
        return redirect()->back();
    }

    public function expensesChangeStatus($id)
    {
        $data = Expense::where('id', $id)->first();
     
        if($data->status == 'Approved')
        {
            $status = 'Pending';
        }else
        {
            $status = 'Approved';
        }

        $value = array('status'=> $status);
        Expense::where('id', $id)->update($value);

        session()->flash('success', 'Status Change Successfully.');
        return redirect()->back();
    }

    public function expensesDelete($id)
    {
        Expense::find($id)->delete();

        session()->flash('success', 'Expenses Deleted Successfully');
        return redirect()->back();
    }

    public function miscellaneous()
    {
        $data = Expense::where('project_type', 'Others')->get();
        return view('admin.miscellaneous.miscellaneous', compact('data'));
    }

    public function miscellaneousCreateForm()
    {
        return view('admin.miscellaneous.miscellaneous-create');
    }

    public function miscellaneousCreate(Request $request)
    {
       $requestData = $request->all();

       Expense::create($requestData);

       session()->flash('success', 'Created Successfully');
       return redirect()->route('miscellaneous');
    }

    public function miscellaneousView($id)
    {
        $expenses = Expense::find($id);
        return view('admin.miscellaneous.miscellaneous-view', compact('expenses'));
    }
}
