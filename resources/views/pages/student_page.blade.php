@extends('layouts.body')

@section('content')

			<div class="col-md-3"; style="margin-top: 20px;float: right;">
				<img src="../images/me.jpg" style="width: 40%; height: 40%">
			</div>

			<div class="col-md-6">
				<h2>Courses Registered: </h2>
				<ul>
                    @if($courses->chemistry)<li>{{$courses->chemistry}}</li>@endif
                    @if($courses->biology)<li>{{$courses->biology}}</li>@endif
                        @if($courses->physics)<li>{{$courses->physics}}</li>@endif
                    @if($courses->geography)<li>{{$courses->geography}}</li>@endif
					@if($courses->economics)<li>{{$courses->economics}}</li>@endif
					@if($courses->agric)<li>{{$courses->agric}}</li>@endif
					@if($courses->government)<li>{{$courses->government}}</li>@endif
					@if($courses->literature)<li>{{$courses->literature}}</li>@endif
					@if($courses->accounting)<li>{{$courses->accounting}}</li>@endif
					@if($courses->commerce)<li>{{$courses->commerce}}</li>@endif
					@if($courses->arts)<li>{{$courses->arts}}</li>@endif
					@if($courses->civic)<li>{{$courses->civic}}</li>@endif
				</ul>
			</div>
@endsection
