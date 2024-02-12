<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectManager;
use Validator;

class ProjectManagerController extends Controller
{
    public function projectManager()
    {
        $projectManagers = ProjectManager::all();
        return view('admin.projectManager.projectManager', compact('projectManagers'));
    }

    public function projectManagerCreateForm()
    {
        return view('admin.projectManager.projectManager-create');
    }

    public function projectManagerCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'      => 'required' ,     'email'  => 'required',
            'mobile'     => 'required' ,    'gender'   => 'required',
            'address'     => 'required' 
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $requestData = $request->all();

            if($requestData)
            {
                ProjectManager::create($requestData);

                session()->flash('success', 'Created Successfully.');

                return redirect()->route('projectManager');
            }
        }
    }

    public function projectManagerEdit($id)
    {
        $projectManagers = ProjectManager::find($id);
        return view('admin.projectManager.projectManager-edit', compact('projectManagers'));
    }

    public function projectManagerUpdate(Request $request, $id)
    {
        dd($request->all());
    }

    public function projectManagerDelete($id)
    {
        ProjectManager::find($id)->delete();

        session()->flash('success', 'Deleted Successfully.');
        return redirect()->back();
    }
}
