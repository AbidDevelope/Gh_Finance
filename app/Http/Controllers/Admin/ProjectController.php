<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function projects()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects.projects', compact('projects'));
    }

    public function projectsCreateForm()
    {
        return view('admin.projects.projects-create');
    }

    public function projectsCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'      => 'required' ,     'description'  => 'required',
            'start_date'  => 'required' ,   'end_date'   => 'required',
            'budget'    => 'required' ,     'location'  => 'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();
            if($requestData)
            {
                Project::create($requestData);

                session()->flash('success', 'Project Created Successfully.');
                return redirect()->route('projects');
            }
        }
    }

    public function projectsView($id)
    {
        $projects = Project::find($id);
        return view('admin.projects.projects-view', compact('projects'));
    }


    public function projectsEdit(string $id)
    {
        $projects = Project::find($id);
        return view('admin.projects.projects-edit', compact('projects'));
    }

 
    public function projectsUpdate(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'name'      => 'required' ,     'description'  => 'required',
            'start_date'  => 'required' ,   'end_date'   => 'required',
            'budget'    => 'required' ,     'location'  => 'required',
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

                session()->flash('success', 'Project Updated Successfully.');
                return redirect()->route('projects');
            }
        }
    }


    public function projectsDelete(string $id)
    {
        Project::find($id)->delete();

        session()->flash('success', 'Project Deleted Successfully.');
        return redirect()->back();
    }
}
