<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function student()
    {
        return view('pages.student_page');
    }

    public function biodata()
    {
        return view('pages.biodata_page');
    }

    public function profile()
    {
        return view('pages.profile_page');
    }
    public function registerCourse()
    {
        return view ('pages.register_course');
    }
}
