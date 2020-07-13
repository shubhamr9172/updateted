<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeTeacherController extends Controller
{
  
    public function freeteacher()
    {
        return view('FreeTeacher/Teacher_Profile');
    }
}
