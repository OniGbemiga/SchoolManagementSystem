<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class RegisterCourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'chemistry' => 'nullable',
            'physics' => 'nullable',
            'biology' => 'nullable',
            'geography' => 'nullable',
            'economics' => 'nullable',
            'agric' => 'nullable',
            'government' => 'nullable',
            'literature' => 'nullable',
            'accounting' => 'nullable',
            'commerce' => 'nullable',
            'arts' => 'nullable',
            'civic' => 'nullable',
        ]);

        $course = new Course;
        $course->user_id = auth()->user()->id;
        $course->chemistry = $request->input('chemistry');
        $course->physics = $request->input('physics');
        $course->biology = $request->input('biology');
        $course->geography = $request->input('geography');
        $course->economics = $request->input('economics');
        $course->agric = $request->input('agric');
        $course->government = $request->input('government');
        $course->literature = $request->input('literature');
        $course->accounting = $request->input('accounting');
        $course->commerce = $request->input('commerce');
        $course->arts = $request->input('arts');
        $course->civic = $request->input('civic');
        $course->save();

        return redirect('/profile')->with('success','Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $course = Course::find($id);
//        //dd($blog);
//        return view('pages.student_page')->with('courses',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
