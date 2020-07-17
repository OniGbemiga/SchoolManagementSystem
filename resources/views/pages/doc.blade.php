@extends('layouts.body')

@section('content')

{{--    @foreach($biodata as $biodata)--}}
    <div class="col-md-6">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <td>First name: </td>
                <td>{{auth()->user()->name}}</td>
            </tr>
            <tr>
                <td>birth: </td>
                <td>{{$biodatas->birth}}</td>
            </tr>
            <tr>
                <td>Location: </td>
                <td>{{$biodatas->location}}</td>
            </tr>
            <tr>
                <td>Religion: </td>
                <td>{{$biodatas->religion}}</td>
            </tr>
            <tr>
                <td>Kin Name: </td>
                <td>{{$biodatas->kinname}}</td>
            </tr>
            <tr>
                <td>Kin Relationship: </td>
                <td>
                    {{$biodatas->kinrelationship}}
                </td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>
                    {{$biodatas->address}}
                </td>
            </tr>
            <tr>
                <td>Sponsor Name: </td>
                <td>{{$biodatas->sponsorname}}</td>
            </tr>
            <tr>
                <td>Extra Curriculum: </td>
                <td>{{$biodatas->extra}}</td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td>{{$biodatas->nation}}</td>
            </tr>
            <tr>
                <td>Origin: </td>
                <td>{{$biodatas->origin}}</td>
            </tr>
            <tr>
                <td>Home Address: </td>
                <td>{{$biodatas->homeaddress}}</td>
            </tr>
            <tr>
                <td>Kin Address: </td>
                <td>{{$biodatas->kinaddress}}</td>
            </tr>
            <tr>
                <td>Kin Phone Number: </td>
                <td>{{$biodatas->kinphone}}</td>
            </tr>
            <tr>
                <td>Year of Entry: </td>
                <td>{{$biodatas->year}}</td>
            </tr>
            <tr>
                <td>Duration Of course: </td>
                <td>{{$biodatas->coursetime}}</td>
            </tr>
            </thead>
        </table>
    </div>
{{--    @endforeach--}}

@endsection
