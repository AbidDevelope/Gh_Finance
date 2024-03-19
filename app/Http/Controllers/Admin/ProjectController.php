<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectManager;
use Validator;

class ProjectController extends Controller
{

    public function projects()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects.projects', compact('projects'));
    }

    public function projectsCreateForm()
    {
        $projectsManagers = ProjectManager::all();
        // return $projectsManagers;
        return view('admin.projects.projects-create', compact('projectsManagers'));
    }

    public function projectsCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'project_manager_id' => 'required',
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
        $projects = Project::where('id', $id)->with('projectManager')->first();

        $projectManagers = ProjectManager::all();

        return view('admin.projects.projects-edit', compact('projects', 'projectManagers'));
    }


    public function projectsUpdate(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'project_manager_id' => 'required',
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

    public function clients(Request $request)
    {
        $serviceType = Project::select('project_type')->distinct()->pluck('project_type');
        $selectedType = $request->input('project_type');
    
        if($selectedType)
        {
            $clients = Project::where('project_type', $selectedType)->get();
        }else
        {
            $clients = Project::all();
        }

        $clients = $clients->map(function($client){
            $names = explode(' ', $client->contact_name, 2);
            $client->first_name = $names[0] ?? null;
            $client->last_name = $names[1] ?? null;
            return $client;
        });
       
        return view('admin.clients.clients', compact('clients', 'serviceType', 'selectedType'));
    }
}
