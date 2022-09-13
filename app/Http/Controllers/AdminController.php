<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        return view('admin.admin-home');
    }

    public function members()
    {
        return view('admin.view-members');
    }

    public function savings()
    {
        return view('admin.savings');
    }

    public function loans()
    {
        return view('admin.loans');
    }

    public function reports()
    {
        return view('admin.reports');
    }

    public function add_new_member_form()
    {
        return view('admin.members.add-new');
    }

    public function update_member_savings_record()
    {
        return view('admin.members.update-savings');
    }
}
