@extends('layouts.body')

@section('content')

    @foreach($biodatas as $biodata)
    <div class="col-md-6">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <td>First name: </td>
                <td>{{auth()->user()->name}}</td>
            </tr>
            <tr>
                <td>birth: </td>
                <td>{{$biodata->birth}}</td>
            </tr>
            <tr>
                <td>Location: </td>
                <td>{{$biodata->location}}</td>
            </tr>
            <tr>
                <td>Religion: </td>
                <td>{{$biodata->religion}}</td>
            </tr>
            <tr>
                <td>Kin Name: </td>
                <td>{{$biodata->kinname}}</td>
            </tr>
            <tr>
                <td>Kin Relationship: </td>
                <td>
                    {{$biodata->kinrelationship}}
                </td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>
                    {{$biodata->address}}
                </td>
            </tr>
            <tr>
                <td>Sponsor Name: </td>
                <td>{{$biodata->sponsorname}}</td>
            </tr>
            <tr>
                <td>Extra Curriculum: </td>
                <td>{{$biodata->extra}}</td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td>{{$biodata->nation}}</td>
            </tr>
            <tr>
                <td>Origin: </td>
                <td>{{$biodata->origin}}</td>
            </tr>
            <tr>
                <td>Home Address: </td>
                <td>{{$biodata->homeaddress}}</td>
            </tr>
            <tr>
                <td>Kin Address: </td>
                <td>{{$biodata->kinaddress}}</td>
            </tr>
            <tr>
                <td>Kin Phone Number: </td>
                <td>{{$biodata->kinphone}}</td>
            </tr>
            <tr>
                <td>Year of Entry: </td>
                <td>{{$biodata->year}}</td>
            </tr>
            <tr>
                <td>Duration Of course: </td>
                <td>{{$biodata->coursetime}}</td>
            </tr>
            </thead>
        </table>
    </div>
    @endforeach

@endsection
