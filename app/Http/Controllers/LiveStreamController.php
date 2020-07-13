<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveStreamController extends Controller
{
    public function liveStream()
    {
        return view('paidTeacher/livestream');
    }
}
