<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index(){
        $title      = "Dashboard";
        $getDatas   = [];
        $getCourse  = Course::where('status', 1)->get();
        if(Auth::user()->role == 1 ){
            return View('admin.dashboard.student',compact('title','getCourse'));
        }
        if(Auth::user()->role == 2 ){
            return View('admin.dashboard.teacher',compact('title','getCourse'));
        }
        if(Auth::user()->role == 3 ){
            return View('admin.dashboard.admin',compact('title','getCourse'));
        }
        
    }
}
