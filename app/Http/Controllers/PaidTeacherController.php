<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaidTeacherController extends Controller
{
    public function dashboard()
    {
        return view('paidTeacher/index');
    }

    public function courses()
    {
        return view('paidTeacher/Request');
    }

    public function explore()
    {
        return view('paidTeacher/explore');
    }

    public function RequestliveStream()
    {
        return view('paidTeacher/live_streams');
    }

    public function RequestCourses()
    {
        return view('paidTeacher/RequestCourse');
    }

    public function studentReview()
    {
        return view('paidTeacher/studentReview');
    }
}
