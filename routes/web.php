<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('home', function () {
        return view('admin/Dashboard');
    })->name('dasboard');
    Route::get('login', function () {
        return view('adminLogin');
    })->name('login');
    Route::get('otp', function () {
        return view('admin.OTP_page');
    })->name('otp');
    Route::get('roleView', function () {
        return view('admin.Roles.Viewroles');
    })->name('roles');
    Route::get('permissionView', function () {
        return view('admin.Permission.ViewPermission');
    })->name('permission');
    Route::get('videos', function () {
        return view('admin.Video.CreateVideos');
    })->name('videos');
});

Route::prefix('paidTeacher')->group(function () {
    Route::get('home', function () {
        return view('paidTeacher/index');
    })->name('dashboard');
    Route::get('RequestAccess', function () {
        return view('paidTeacher/Request');
    })->name('courses');
    Route::get('explore', function () {
        return view('paidTeacher/explore');
    })->name('explore');
    Route::get('live_streams', function () {
        return view('paidTeacher/live_streams');
    })->name('RequestliveStream');
    Route::get('RequestCourse', function () {
        return view('paidTeacher/RequestCourse');
    })->name('RequestCourses');
    Route::get('studentReview', function () {
        return view('paidTeacher/studentReview');
    })->name('studentReview');
   
});

Route::get('/livestream', function () {
    return view('paidTeacher/livestream');
})->name('liveStream');

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('SignUp');
})->name('register');  


Route::prefix('freeteacher')->group(function () {
    Route::get('home', function () {
        return view('FreeTeacher/Teacher_Profile');
    })->name('freeTeacherRegister'); 
});


Route::get('create-video','AdminController@create');
Route::get('createvideotable','AdminController@create_video_table')->name('createvideotable');
Route::get('createvideo','AdminController@create_video')->name('createvideo');

Route::get('uploadtestseries','AdminController@upload_test_series')->name('uploadtestseries');

Route::get('setpayment','AdminController@setpayment')->name('setpayment');
