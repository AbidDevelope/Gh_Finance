<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;

class ServicesController extends Controller
{
    public function allServices()
    {
        $projects = Project::all();
        return view('admin.all-services', compact('projects'));
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
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' , 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
           $requestData = $request->all();
           Project::create($requestData);

        session()->flash('success', 'Created Successfully');
        return redirect()->route('designs');
        }
    }


    public function designEdit($id)
    {
        $projects = Project::find($id);
        return view('admin.designs.design-edit', compact('projects'));
    }

    public function designUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' , 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();
            $requestData = $request->all();

            if($projects)
            {
                $projects->update($requestData);

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
        $projects = Project::find($id);
        return view('admin.designs.design-view', compact('projects'));
    }


    public function designDelete($id)
    {
       Project::find($id)->delete();

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
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else
        {
            $requestData = $request->all();

            $projects = Project::create($requestData);
            if($projects)
            {
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
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();
            $requestData = $request->all();

            if($projects)
            {
                $projects->update($requestData);

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
       Project::find($id)->delete();

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
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();

            Project::create($requestData);
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
            'project_type'     => 'required' ,  'project_manager'     => 'required',
            'project_name'     => 'required' ,  'project_location'    => 'required',
            'project_value'    => 'required' ,  'email'               => 'required',
            'mobile'           => 'required' ,  'office_landline'     => 'required',
            'office_location'  => 'required' , 'remarks'              => 'required',
            'company_name'     => 'required' , 'company_location'     => 'required',
            'description'      => 'required' ,
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $projects = Project::where('id', $id)->first();
            $requestData = $request->all();

            if($projects)
            {
                $projects->update($requestData);

                session()->flash('success', 'Updated Successfully.');
                return redirect()->route('design_&_construction');
            }

        }
    }

    public function designConstructionDelete($id)
    {
        Project::find($id)->delete();

        session()->flash('success', 'Deleted Successfully.');
        return redirect()->back();
    }
}
