<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseItem;
use App\Models\Project;
use App\Models\Miscellaneous;
use App\Models\MiscellaneousItem;
use Validator;
use Carbon\Carbon;

class ExpensesController extends Controller
{
    public function miscellaneous()
    {
        $miscell = Miscellaneous::orderBy('id', 'desc')->get();
        
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
      }
       session()->flash('success', 'Created Successfully');
       return redirect()->route('miscellaneous');
    }

    public function miscellaneousView($id)
    {
        $miscell = Miscellaneous::where('id', $id)->with('miscellaneousItem')->first();
        return view('admin.miscellaneous.miscellaneous-view', compact('miscell'));
    }

    public function miscellaneousEdit($id)
    {
        $miscellaneous = Miscellaneous::with('miscellaneousItem')->findOrFail($id); 
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
        $expenses = Expense::with(['expenseItem', 'project'])->get();
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
                    // 'month'       => $request->month[$key],
                    // 'date' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->date[$key])->format('Y-m-d'),
                    'receipt'  => $request->receipt[$key],
                    'amount_deposite' => $request->amount_deposite[$key],
                    'amount_withdrawn'  => $request->amount_withdrawn[$key],
                    // 'beneficiary'  => $request->beneficiary[$key],
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
       $expenses = Expense::find($id);
       return view('admin.pettyCash.expenses-view', compact('expenses'));
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

        $expenses = Expense::whereDate('date', '>=', $startDate)->whereDate('date', '<=', $endDate)->get();

        $projects = Project::whereDate('date', '>=', $startDate)
                            ->whereDate('date', '<=', $endDate)
                            ->get(); 

        $miscell = Miscellaneous::whereBetween('created_at', [$startDate, $endDate])->get(); 
        if($miscell)
        {
            return view('admin.miscellaneous.miscellaneous', compact('miscell'));
        }                    

        if($projects)
        {
            return view('admin.allServices.all-services', compact('projects'));
        } 
    
        return view('admin.pettyCash.pettyCash', compact('expenses'));
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
}
