<?php

namespace App\Http\Controllers;

use App\Biodata;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function student($id)
    {
        $course = Course::find($id);
        dd($course);
        return view('pages.student_page')->with('course',$course);
        //return view('pages.student_page');
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

    public function doc()
    {
        $biodata = DB::select('SELECT * FROM biodatas');
        //dd($biodata);
        return view ('pages.doc')->with('biodatas',$biodata);
    }
}
