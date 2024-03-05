<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accounts()
    {
        return view('admin.accounts.accounts');
    }

    public function accountCreate()
    {
        return view('admin.accounts.accounts-create');
    }

    public function accountView()
    {
        return view('admin.accounts.accounts-view');
    }

    public function accountEdit()
    {
        return view('admin.accounts.accounts-edit');
    }
}
