<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('SignUp');
    }
    public function create()
    {
        return view('admin/Video/CreateVideos');
    }
    public function create_video()
    {
        return view('admin/Video/createvideo_n');
    }
    public function create_video_table()
    {
        return view('admin/Video/createvideotable');
    }
    public function upload_test_series()
    {
        return view('admin/Video/UploadTestSeries_n');
    }
    public function setpayment()
    {
        return view('admin/Video/setpayment');
    }
}
