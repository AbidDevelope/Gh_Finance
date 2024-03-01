<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Payment;
use Validator;
use DateTime;
use Carbon\Carbon;

class ServicesController extends Controller
{
    public function allServices()
    {
        $projects = Project::all();
        return view('admin.allServices.all-services', compact('projects'));
    }

    public function allServicesView($id)
    {
        $projects = Project::find($id);
        return view('admin.allServices.all-services-view', compact('projects'));
    }

    public function designs()
    { 
        $projects = Project::orderBy('id', 'desc')->where(['project_type' => 'Design'])->get();
        return view('admin.designs.designs', compact('projects'));
    }


    public function createDesignList()
    {
      return view('admin.designs.designs-create');
    }

    public function createDesign(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
        $date = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');

        $project = new Project();
        $project->project_type = $request->project_type;
        $project->start_date = $date;
        $project->project_manager = $request->project_manager;
        $project->manager_email = $request->manager_email;
        $project->Manager_mobile = $request->Manager_mobile;
        $project->Manager_landline = $request->Manager_landline;
        $project->manager_remarks = $request->manager_remarks;

        $project->company_name = $request->company_name;
        $project->contact_name = $request->contact_name;
        $project->client_email = $request->client_email;
        $project->client_mobile = $request->client_mobile;
        $project->company_landline = $request->company_landline;
        $project->company_location = $request->company_location;
        $project->company_landmark = $request->company_landmark;
        $project->company_country = $request->company_country;
        $project->company_website = $request->company_website;
        $project->company_remarks = $request->company_remarks;

        $project->project_name = $request->project_name;
        $project->contact_person = $request->contact_person;
        $project->project_email = $request->project_email;
        $project->project_mobile = $request->project_mobile;
        $project->project_location = $request->project_location;
        $project->project_value = $request->project_value;
        $project->project_country = $request->project_country;
        $project->payment_plan = $request->payment_plan;
        $project->project_description = $request->project_description;
        $project->save();

           foreach($request->amount as $key=>$payment)
           {
            if(isset($request->payment_date[$key]))
            {
                $paymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
            }else{
                $paymentDate = null;
            }

              $payments = new Payment([
                  'project_id' => $project->id,
                  'paymentMode' => $request->paymentMode[$key],
                  'payment_date'   => $paymentDate,
                  'amount'   => $request->amount[$key],
                  'receivable'  => $request->receivable[$key],
                  'chequeNumber'  => $request->chequeNumber[$key],
                  'bankName'  => $request->bankName[$key],
                  'transactionId'  => $request->transactionId[$key],
              ]);
              $payments->save();
           }

        session()->flash('success', 'Created Successfully');
        return redirect()->route('designs');
        }
    }


    public function designEdit($id)
    {
        $projects = Project::with('payments')->findOrFail($id);
        return view('admin.designs.design-edit', compact('projects'));
    }

    public function designUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
        ]);


        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();

            if($projects)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
                $projects->update([
                    'project_type'       =>  $request->project_type,
                    'start_date'               =>  $date,
                    'project_manager'    =>  $request->project_manager,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'Manager_mobile'     =>  $request->Manager_mobile,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'manager_remarks'    =>  $request->manager_remarks,

                    'company_name'    =>  $request->company_name,
                    'contact_name'    =>  $request->contact_name,
                    'client_email'    =>  $request->client_email,
                    'client_mobile'    =>  $request->client_mobile,
                    'company_landline'    =>  $request->company_landline,
                    'company_location'    =>  $request->company_location,
                    'company_landmark'    =>  $request->company_landmark,
                    'company_country'    =>  $request->company_country,
                    'company_website'    =>  $request->company_website,
                    'company_remarks'    =>  $request->company_remarks,

                    'project_name'    =>  $request->project_name,
                    'contact_person'    =>  $request->contact_person,
                    'project_email'    =>  $request->project_email,
                    'project_mobile'    =>  $request->project_mobile,
                    'project_location'    =>  $request->project_location,
                    'project_value'    =>  $request->project_value,
                    'project_country'    =>  $request->project_country,
                    'payment_plan'    =>  $request->payment_plan,
                    'project_description'    =>  $request->project_description,
                ]);
                 
                $data = $request->input('items', []);
                foreach($data as $itemId=>$itemData)
                {
                    $payments = Payment::find($itemId);
                    if($payments)
                    {
                        $payments->payment_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['payment_date']);
                        $payments->amount = $itemData['amount'];
                        $payments->receivable = $itemData['receivable'];
                        $payments->chequeNumber = $itemData['chequeNumber'];
                        $payments->bankName = $itemData['bankName'];
                        $payments->transactionId = $itemData['transactionId'];
                        $payments->save();
                    }
                }

                $paymentModes = collect($request->input('paymentMode', []));

                foreach($request->amount as $key=>$payment)
                {
                    if(!isset($paymentModes[$key]) || empty($paymentModes[$key]))
                    {
                         continue;
                    }
                    if(isset($request->payment_date[$key]))
                    {
                        $newPaymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
                    }else{
                        $newPaymentDate = null;
                    }

                    $currentPaymentModes = $paymentModes->get($key);

                    $newPayments = new Payment([
                        'project_id' => $projects->id,
                        'paymentMode' => $currentPaymentModes,
                        'payment_date' => $newPaymentDate,
                        'amount'   => $request->amount[$key],
                        'receivable'  => $request->receivable[$key],
                        'chequeNumber'  => $request->chequeNumber[$key],
                        'bankName'    => $request->bankName[$key],
                        'transactionId'    => $request->transactionId[$key],
                    ]);
                    $newPayments->save();
                }


                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('designs');
            }else{
              session()->flash('error', 'Something Went Wrong.');
              return redirect()->back();
            }
        }
    }

    public function designView($id)
    {
        $projects = Project::with('payments')->findOrFail($id);
        return view('admin.designs.design-view', compact('projects'));
    }


    public function designDelete($id)
    {
       $project = Project::find($id);

       $project->payments()->delete();
       $project->delete();

       session()->flash('success', 'Data Deleted Successfully.');
       return redirect()->back();
    }

    public function constructions()
    {
        $projects = Project::orderBy('id', 'desc')->where(['project_type' => 'Construction'])->get();
        return view('admin.constructions.constructions', compact('projects'));
    }

    public function createConstructionsForm()
    {
        return view('admin.constructions.contsructions-create');
    }

    public function createConstructions(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
          ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
            $date = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
    
            $projects = new Project();
            $projects->project_type = $request->project_type;
            $projects->start_date = $date;
            $projects->project_manager = $request->project_manager;
            $projects->manager_email = $request->manager_email;
            $projects->Manager_mobile = $request->Manager_mobile;
            $projects->Manager_landline = $request->Manager_landline;
            $projects->manager_remarks = $request->manager_remarks;

            $projects->company_name = $request->company_name;
            $projects->contact_name = $request->contact_name;
            $projects->client_email = $request->client_email;
            $projects->client_mobile = $request->client_mobile;
            $projects->company_landline = $request->company_landline;
            $projects->company_location = $request->company_location;
            $projects->company_landmark = $request->company_landmark;
            $projects->company_country = $request->company_country;
            $projects->company_website = $request->company_website;
            $projects->company_remarks = $request->company_remarks;

            $projects->project_name = $request->project_name;
            $projects->contact_person = $request->contact_person;
            $projects->project_email = $request->project_email;
            $projects->project_mobile = $request->project_mobile;
            $projects->project_location = $request->project_location;
            $projects->project_value = $request->project_value;
            $projects->project_country = $request->project_country;
            $projects->payment_plan = $request->payment_plan;
            $projects->project_description = $request->project_description;
            $projects->save();

            if($projects)
            {
                foreach($request->amount as $key=>$payment)
                {
                    if(isset($request->payment_date[$key]))
                    {
                        $paymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
                    }else{
                        $paymentDate = null;
                    }

                   $payments = new Payment([
                       'project_id' => $projects->id,
                       'paymentMode' => $request->paymentMode[$key],
                       'payment_date'      => $paymentDate,
                       'amount'   => $request->amount[$key],
                       'receivable'  => $request->receivable[$key],
                       'chequeNumber'  => $request->chequeNumber[$key],
                       'bankName'  => $request->bankName[$key],
                       'transactionId'  => $request->transactionId[$key],
                   ]);
                   $payments->save();
                }
                session()->flash('success', 'Constructions Created Successfully');
                return redirect()->route('constructions');
            }else{
                session()->flash('error', 'Something Went Wrong');
                return redirect()->back();
            }
        }
    }

    public function constructionView($id)
    {
       $projects = Project::find($id);
       return view('admin.constructions.construction-view', compact('projects'));
    }

    public function constructionEdit($id)
    {
       $projects = Project::find($id);
       return view('admin.constructions.constructions-edit', compact('projects'));
    }

    public function constructionUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();

            if($projects)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
                $projects->update([
                    'project_type'       =>  $request->project_type,
                    'start_date'               =>  $date,
                    'project_manager'    =>  $request->project_manager,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'Manager_mobile'     =>  $request->Manager_mobile,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'manager_remarks'    =>  $request->manager_remarks,

                    'company_name'    =>  $request->company_name,
                    'contact_name'    =>  $request->contact_name,
                    'client_email'    =>  $request->client_email,
                    'client_mobile'    =>  $request->client_mobile,
                    'company_landline'    =>  $request->company_landline,
                    'company_location'    =>  $request->company_location,
                    'company_landmark'    =>  $request->company_landmark,
                    'company_country'    =>  $request->company_country,
                    'company_website'    =>  $request->company_website,
                    'company_remarks'    =>  $request->company_remarks,

                    'project_name'    =>  $request->project_name,
                    'contact_person'    =>  $request->contact_person,
                    'project_email'    =>  $request->project_email,
                    'project_mobile'    =>  $request->project_mobile,
                    'project_location'    =>  $request->project_location,
                    'project_value'    =>  $request->project_value,
                    'project_country'    =>  $request->project_country,
                    'payment_plan'    =>  $request->payment_plan,
                    'project_description'    =>  $request->project_description,
                ]);
                 
                $data = $request->input('items', []);
                foreach($data as $itemId=>$itemData)
                {
                    $payments = Payment::find($itemId);
                    if($payments)
                    {
                        $payments->payment_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['payment_date']);
                        $payments->amount = $itemData['amount'];
                        $payments->receivable = $itemData['receivable'];
                        $payments->chequeNumber = $itemData['chequeNumber'];
                        $payments->bankName = $itemData['bankName'];
                        $payments->transactionId = $itemData['transactionId'];
                        $payments->save();
                    }
                }

                $paymentModes = collect($request->input('paymentMode', []));

                foreach($request->amount as $key=>$payment)
                {
                    if(!isset($paymentModes[$key]) || empty($paymentModes[$key]))
                    {
                         continue;
                    }
                    if(isset($request->payment_date[$key]))
                    {
                        $newPaymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
                    }else{
                        $newPaymentDate = null;
                    }

                    $currentPaymentModes = $paymentModes->get($key);

                    $newPayments = new Payment([
                        'project_id' => $projects->id,
                        'paymentMode' => $currentPaymentModes,
                        'payment_date' => $newPaymentDate,
                        'amount'   => $request->amount[$key],
                        'receivable'  => $request->receivable[$key],
                        'chequeNumber'  => $request->chequeNumber[$key],
                        'bankName'    => $request->bankName[$key],
                        'transactionId'    => $request->transactionId[$key],
                    ]);
                    $newPayments->save();
                }


                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('constructions');
            }else{
              session()->flash('error', 'Something Went Wrong.');
              return redirect()->back();
            }
        }
    }

    public function constructionDelete($id)
    {
       $project = Project::with('payments')->findOrFail($id);
       $project->payments()->delete();
       $project->delete();

       session()->flash('success', 'Constructions Deleted Successfully.');
       return redirect()->back();
    }

    public function designConstructions()
    {
        $projects = Project::where('project_type', 'Design & Construction')->get();
        return view('admin.design_&_construction.design_&_construction',compact('projects'));
    }

    public function designConstructionCreateForm()
    {
        return view('admin.design_&_construction.design_&_construction_create');
    }

    public function designConstructionCreate(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $date = DateTime::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
    
            $projects = new Project();
            $projects->project_type = $request->project_type;
            $projects->start_date = $date;
            $projects->project_manager = $request->project_manager;
            $projects->manager_email = $request->manager_email;
            $projects->Manager_mobile = $request->Manager_mobile;
            $projects->Manager_landline = $request->Manager_landline;
            $projects->manager_remarks = $request->manager_remarks;

            $projects->company_name = $request->company_name;
            $projects->contact_name = $request->contact_name;
            $projects->client_email = $request->client_email;
            $projects->client_mobile = $request->client_mobile;
            $projects->company_landline = $request->company_landline;
            $projects->company_location = $request->company_location;
            $projects->company_landmark = $request->company_landmark;
            $projects->company_country = $request->company_country;
            $projects->company_website = $request->company_website;
            $projects->company_remarks = $request->company_remarks;

            $projects->project_name = $request->project_name;
            $projects->contact_person = $request->contact_person;
            $projects->project_email = $request->project_email;
            $projects->project_mobile = $request->project_mobile;
            $projects->project_location = $request->project_location;
            $projects->project_value = $request->project_value;
            $projects->project_country = $request->project_country;
            $projects->payment_plan = $request->payment_plan;
            $projects->project_description = $request->project_description;
            $projects->save();

            if($projects)
            {
                foreach($request->amount as $key=>$payment)
                {
                    if(isset($request->payment_date[$key]))
                    {
                        $paymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
                    }else{
                        $paymentDate = null;
                    }
                    $payments = new Payment([
                        'project_id' => $projects->id,
                        'paymentMode' => $request->paymentMode[$key],
                        'payment_date'   => $paymentDate,
                        'amount'  => $request->amount[$key],
                        'receivable'  => $request->receivable[$key],
                        'chequeNumber' => $request->chequeNumber[$key],
                        'bankName'   => $request->bankName[$key],
                        'transactionId'  => $request->transactionId[$key],
                    ]);
                    $payments->save();
                }
            }
            session()->flash('success', 'Created Successfully.');
            return redirect()->route('design_&_construction');
        }
    }

    public function designConstructionView($id)
    {
        $projects = Project::find($id);
        return view('admin.design_&_construction.design_&_construction_view', compact('projects'));
    }

    public function designConstructionEdit($id)
    {
        $projects = Project::find($id);
        return view('admin.design_&_construction.design_&_construction_edit', compact('projects'));
    }

    public function designConstructionUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'project_type'      => 'required' ,  'start_date' => 'required',  'project_manager' => 'required',
            'manager_email'     => 'required' ,  'Manager_mobile'        => 'required',
            'Manager_landline'  => 'required' ,  'manager_remarks'       => 'required',

            'company_name'      => 'required' ,  'contact_name'  => 'required',
            'client_email'      => 'required' ,  'client_mobile'        => 'required',
            'company_landline'  => 'required' ,  'company_location'      => 'required',
            'company_landmark'  => 'required',   'company_country'   => 'required' ,
            'company_website'   => 'required' ,  'company_remarks'   => 'required' , 
           
            'project_name'      => 'required' ,  'contact_person'        => 'required',
            'project_email'     => 'required' ,  'project_mobile'    => 'required',
            'project_location'  => 'required' ,  'project_value'     => 'required' ,
            'project_country'   => 'required' ,  'payment_plan'      => 'required',
            'project_description'   => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();

            if($projects)
            {
                $date = DateTime::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
                $projects->update([
                    'project_type'       =>  $request->project_type,
                    'start_date'               =>  $date,
                    'project_manager'    =>  $request->project_manager,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'Manager_mobile'     =>  $request->Manager_mobile,
                    'Manager_landline'   =>  $request->Manager_landline,
                    'manager_remarks'    =>  $request->manager_remarks,

                    'company_name'    =>  $request->company_name,
                    'contact_name'    =>  $request->contact_name,
                    'client_email'    =>  $request->client_email,
                    'client_mobile'    =>  $request->client_mobile,
                    'company_landline'    =>  $request->company_landline,
                    'company_location'    =>  $request->company_location,
                    'company_landmark'    =>  $request->company_landmark,
                    'company_country'    =>  $request->company_country,
                    'company_website'    =>  $request->company_website,
                    'company_remarks'    =>  $request->company_remarks,

                    'project_name'    =>  $request->project_name,
                    'contact_person'    =>  $request->contact_person,
                    'project_email'    =>  $request->project_email,
                    'project_mobile'    =>  $request->project_mobile,
                    'project_location'    =>  $request->project_location,
                    'project_value'    =>  $request->project_value,
                    'project_country'    =>  $request->project_country,
                    'payment_plan'    =>  $request->payment_plan,
                    'project_description'    =>  $request->project_description,
                ]);
                 
                $data = $request->input('items', []);
                foreach($data as $itemId=>$itemData)
                {
                    $payments = Payment::find($itemId);
                    if($payments)
                    {
                        $payments->payment_date = \Carbon\Carbon::createFromFormat('d/m/Y', $itemData['payment_date']);
                        $payments->amount = $itemData['amount'];
                        $payments->receivable = $itemData['receivable'];
                        $payments->chequeNumber = $itemData['chequeNumber'];
                        $payments->bankName = $itemData['bankName'];
                        $payments->transactionId = $itemData['transactionId'];
                        $payments->save();
                    }
                }

                $paymentModes = collect($request->input('paymentMode', []));

                foreach($request->amount as $key=>$payment)
                {
                    if(!isset($paymentModes[$key]) || empty($paymentModes[$key]))
                    {
                         continue;
                    }
                    if(isset($request->payment_date[$key]))
                    {
                        $newPaymentDate = DateTime::createFromFormat('d/m/Y', $request->payment_date[$key])->format('Y-m-d');
                    }else{
                        $newPaymentDate = null;
                    }

                    $currentPaymentModes = $paymentModes->get($key);

                    $newPayments = new Payment([
                        'project_id' => $projects->id,
                        'paymentMode' => $currentPaymentModes,
                        'payment_date' => $newPaymentDate,
                        'amount'   => $request->amount[$key],
                        'receivable'  => $request->receivable[$key],
                        'chequeNumber'  => $request->chequeNumber[$key],
                        'bankName'    => $request->bankName[$key],
                        'transactionId'    => $request->transactionId[$key],
                    ]);
                    $newPayments->save();
                }


                session()->flash('success', 'Data Updated Successfully.');
                return redirect()->route('design_&_construction');
            }else{
              session()->flash('error', 'Something Went Wrong.');
              return redirect()->back();
            }
        }
    }
    

    public function designConstructionDelete($id)
    {
        $project = Project::with('payments')->findOrFail($id);
        $project->payments()->delete();
        $project->delete();

        session()->flash('success', 'Deleted Successfully.');
        return redirect()->back();
    }

    public function searchDesign(Request $request)
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

        $projects = Project::where('project_type' , 'Design')->whereDate('date', '>=', $startDate)
                            ->whereDate('date', '<=', $endDate)
                            ->get(); 
        if($projects)
        {
            return view('admin.designs.designs', compact('projects'));
        } 
    }

    public function searchConstruction(Request $request)
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

        $projects = Project::where('project_type' , 'Construction')->whereDate('date', '>=', $startDate)
                            ->whereDate('date', '<=', $endDate)
                            ->get(); 
        if($projects)
        {
            return view('admin.constructions.constructions', compact('projects'));
        } 
    }

    public function searchDesign_Construction(Request $request)
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

        $projects = Project::where('project_type' , 'Design & Construction')->whereDate('date', '>=', $startDate)
                            ->whereDate('date', '<=', $endDate)
                            ->get(); 
        if($projects)
        {
            return view('admin.design_&_construction.design_&_construction', compact('projects'));
        }  
    }

    public function searchAllServices(Request $request)
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

        $projects = Project::whereDate('date', '>=', $startDate)
                            ->whereDate('date', '<=', $endDate)
                            ->get(); 
        if($projects)
        {
            return view('admin.allServices.all-services', compact('projects'));
        }
    }
}
