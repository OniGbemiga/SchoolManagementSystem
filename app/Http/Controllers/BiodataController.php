<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
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

        $biodata = Biodata::create($this->validateRequest($request));
        $this->storeImage($biodata);

        return redirect('/student');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    private function storeImage($biodata){
        if (request()->hasFile('image')){
            $biodata->update([
                'image' => request()->image->store('uploads' , 'public'),
            ]);
            $image = \Intervention\Image\Facades\Image::make(public_path('storage/' . $biodata->image));
            //->fit(800,500);
            $image->save();
        }
        else
        {
            $image = \Intervention\Image\Facades\Image::make(public_path('storage/' . 'noimage.jpg'));
            $image->save();
        }
    }

    private function validateRequest($request)
    {
        return request()->validate([
            'user_id'=>'string','firstname' => 'nullable','image' => 'file|max:4999',
            'birth' => 'nullable','location' => 'nullable',
            'biodata.religion' => 'nullable','kinname' => 'nullable',
            'kinrelationship' => 'nullable','address' => 'nullable',
            'sponsorname' => 'nullable','extra' => 'nullable',
            'biodata.title' => 'nullable','biodata.sex' => 'nullable',
            'nation' => 'nullable','origin' => 'nullable',
            'biodata.marriage' => 'nullable','homeaddress' => 'nullable',
            'kinaddress' => 'nullable','kinphone' => 'nullable',
            'year' => 'nullable','coursetime' => 'nullable',
        ]);
    }
}
