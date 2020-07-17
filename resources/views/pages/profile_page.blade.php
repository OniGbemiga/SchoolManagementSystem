@extends('layouts.body')

@section('content')

                    <div class="col-md-3">
                        <h3>Student Details</h3><br/>
                        <p>Registration Number: {{Auth::user()->id}}/new/student</p>
                        <p>Name: {{strtoupper(Auth::user()->name)}}</p>
{{--                        <p>Current Part: 4</p>--}}
{{--                        <p>Degree Programme: Zoology</p>--}}
{{--                        <p>Department: Zoology</p>--}}
{{--                        <p>Faculty: Science</p>--}}
                    </div>
                    <div class="col-md-3"; style="float: right;">
                        <img src="" style="width: 40%; height: 40%">
                    </div>

@endsection
