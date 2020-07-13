<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    public function dashboard()
    {
        return view('admin/Dashboard');
    }
     public function login()
    {
        return view('adminLogin');
    }
     public function otp()
    {
        return view('admin.OTP_page');
    }
     public function roles()
    {
        return view('admin.Roles.Viewroles');
    }
}
