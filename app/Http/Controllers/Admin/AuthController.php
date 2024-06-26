<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Admin;
use App\Models\Project;
// use App\Models\Admin;
use Validator, Hash, Auth;

class AuthController extends Controller
{
    public function index()
    {
        $projects = Project::with(['pettyCash', 'payments'])->withsum('pettyCash as total_in_account', 'total_in_account')->get();

        $designValue = $projects->where('project_type', 'Design')->sum('project_value');
        $constructionValue = $projects->where('project_type', 'Construction')->sum('project_value');
        $designConstructionValue = $projects->where('project_type', 'Design & Construction')->sum('project_value');

        $totalProjectRevenue = $projects->sum('project_value');

        $totalExpenseValue = $projects->reduce(function ($carry, $project) {
            if($project->pettyCash)
            {
                $pettyCashTotal = $project->pettyCash->sum('total_in_account');
            }else{
                $pettyCashTotal = 0;
            }
            return  $carry + $pettyCashTotal;
        }, 0);


        $totalRevenue = $totalProjectRevenue;
        $totalExpenses = $totalExpenseValue;

        $totalDesign = $designValue;
        $totalConstruction = $constructionValue;
        $totalDesignConstruction = $designConstructionValue;

        $piechartData = 0;

        $piechartData = [
            [
                "name" => "Access From",
                "type" => "pie",
                "radius" => "50%",
                "data" => [
                    ["value" => $totalDesign, "name" => "Design"],
                    ["value" => $totalConstruction, "name" => "Constructions"],
                    ["value" => $totalDesignConstruction, "name" => "Design & Constructions"]
                ],
                "emphasis" => [
                    "itemStyle" => [
                        "shadowBlur" => 10,
                        "shadowOffsetX" => 0,
                        "shadowColor" => "rgba(0, 0, 0, 0.5)"
                    ]
                ]
            ]
        ];

        $piechart = json_encode($piechartData);

        // dd($piechart);
        return view('admin.dashboard', compact('projects', 'totalRevenue', 'totalExpenses', 'totalDesign', 'totalConstruction', 'totalDesignConstruction', 'piechart'));
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'      => 'required|string|max:255',       'last_name' => 'required|string|max:255',
            'email'           => 'required|unique:admins',        'mobile'    => 'required',
            'landline'        => 'required',
            'gender'          => 'required',                      'term_condition'  => 'required',
            'password'        => 'required|max:6'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $admin = new Admin();
            $admin->first_name     = $request->first_name;
            $admin->last_name      = $request->last_name;
            $admin->email          = $request->email;
            $admin->mobile         = $request->mobile;
            $admin->landline       = $request->landline;
            $admin->gender         = $request->gender;
            $admin->password       = Hash::make($request->password);
            $admin->term_condition = $request->term_condition;
            $admin->save();

            session()->flash('message', 'Successfully Registered');
            return redirect('/');
        }
    }

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'           => 'required',
            'password'        => 'required|max:6'
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $admin = Admin::where('email', $request->email)->first();
            if(!$admin)
            {
                session()->flash('error', 'Admin Not Found');
                return redirect()->back();
            }


             $credentials = $request->only('email', 'password');
            if(Auth::guard('admin')->attempt($credentials))
            {
                $request->session()->put('id', $admin->id);
                return redirect('admin/dashboard');
            }
            else
            {
                session()->flash('error', 'Credentials Not Match');
                return redirect()->back();
            }
        }
    }

    public function profile()
    {
        if(Auth::guard('admin')->user())
        {
           $admin = Auth::guard('admin')->user();
        }
        return view('admin.auth.profile', compact('admin'));
    }

    public function profileUpdate(Request $request, $id)
    {
        if(Auth::guard('admin')->user())
        {
            $adminId = Auth::guard('admin')->user()->id;
            if($adminId)
            {
                $admin = Admin::where('id', $adminId)->first();
                if($admin)
                {
                    $requestData = $request->all();
                    $admin->update($requestData);
                }
            }
        }
        session()->flash('success', 'Profile Updated Successfully.');
        return redirect()->back();
    }

    public function changeProfile(Request $request)
    {
        if(Auth::guard('admin')->user())
        {
            $adminId = Auth::guard('admin')->user()->id;
            if($adminId)
            {
                $admin = Admin::where('id', $adminId)->first();
                if($admin)
                {
                    $request->validate([
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);

                    if($request->hasFile('image'))
                    {
                        if ($admin->image && file_exists(public_path($admin->image))) {
                            unlink(public_path($admin->image));
                        }

                        $image = $request->file('image');
                        $imageName = time(). '.' . $image->getClientOriginalExtension();

                        $destinationPath = public_path('assets/admin/img/profile');
                        $image->move($destinationPath, $imageName);
                        $admin->image = $imageName;
                    }
                    $admin->save();

                    session()->flash('success', 'Profile updated successfully.');
                    return redirect()->back();
                }
            }
        }
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('success', 'Successfully Logout.');
        return redirect('/');
    }
}
