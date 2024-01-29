<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Admin;
use Validator, Hash, Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }

    public function postRegister(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'first_name'      => 'required|string|max:255',                      'last_name' => 'required|string|max:255', 
            'email'           => 'required|unique:admins',                       'mobile'    => 'required', 
            'gender'          => 'required',                                     'term_condition'  => 'required',     
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

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('message', 'Successfully Logout.');
        return redirect('/');
    }
}
