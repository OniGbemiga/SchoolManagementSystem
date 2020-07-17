@extends('layouts.body')

@section('content')

    <div class="">
        <h3 style="text-align: center"> Student Information Form - MIS 2 FORM</h3>
        <form action="" method="" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6" style = "border: 10px solid grey; border-radius: 20px 20px 20px 20px;position: center;display: block;text-align: center;margin-left: 150px">
                <!-- left side of form -->
                <div class = "col-lg-6"; style="color: blue">

                    <ul class = "list-group" style = "margin-top: 10px">
                        <li class="list-inline">Registration Number: <span>zoo/2013/052</span></li><br/><br/>
                        <li class="list-inline">Name: <span>ONI OLUWAGBEMIGA AYODELE</span></li>
                    </ul>

                    <div class="form-group">
                        <label for="FormerSurnameF">Former Surname</label>
                        <input class = "form-control" type="text"placeholder="Former Surname&nbsp (If any)" value="" name="firstname"/>
                    </div>

                    <div class="form-group">
                        <label for="FormerSurnameF">Student Picture</label>
                        <input class = "form-control" type="file" name="image"/>
                    </div>

                    <div class="form-group">
                        <label for="DateofBirthF">Date of Birth</label>
                        <input class ="form-control" size="10" type="date" name="birth"/>
                    </div>

                    <div class = "form-group">
                        <label for="PlaceofBirthF">Place of Birth</label>
                        <input class ="form-control" size="20" type="text" name="location" placeholder="Location"/>
                    </div>
                    <div class = "form-group" style="margin-top: 20px;margin-bottom: 20px">
                        <label>Religion</label>
                        <select name="religion" class = "form-control">
                            <option value="0">Select Religion</option>
                            <option selected value="1">Christianity</option>
                            <option value="2">Islam</option>
                            <option value="3">Traditional</option>
                            <option value="4">Others</option>

                        </select>
                    </div>

                    <div class = "form-group">
                        <label>Next of Kin Name</label>
                        <input class = "form-control" type="text" name="kinname" size="20" placeholder="Next of Kin Name"/>
                    </div>

                    <div class = "form-group">
                        <label>Next of Kin <br/>Relationship</label>
                        <input class = "form-control" type="text" name="kinrelationship" size="21" value="" placeholder="Relationship with Kin"/>
                    </div>

                    <div class = "form-group">
                        <label>Contact Address</label>
                        <textarea name="address" class = "form-control" rows="4"> </textarea>
                    </div>

                    <div class = "form-group">
                        <label>Sponsor Name</label>
                        <input class = "form-control" type="text" name="sponsorname"/>
                    </div>
                    <div class = "form-group">
                        <label>Extra Curricular <br/>Activities</label>
                        <input class = "form-control" type="text" name="extracurricularactivitiesF" value="FOOTBALL, BASKETBALL, VOLLEY B"/>
                    </div>
                </div>

                <!-- right side of form -->
                <div class = "col-lg-6"; style="color: blue">

                    <ul class = "list-group" style = "margin-top: 10px">
                        <li class="list-inline">JAMB Reg Num: <span>324564KB</span></li><br/>
                    </ul>

                        <div class="form-group" style="margin-bottom: 20px">
                            <label>Title</label>
                            <select name="title" class = "form-control">
                                <option value="0">Select Title</option>
                                <option selected value="1">Mr</option>
                                <option value="2">Miss</option>
                                <option value="3">Mrs</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sex</label>
                            <select name="sex" class = "form-control">
                                <option value="0">Select Sex</option>
                                <option selected value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nationality</label>
                            <input class = "form-control" type="text" name="nation" size="20" placeholder="country"/>
                        </div>

                        <div class="form-group">
                            <label>Place of Origin</label>
                            <input class = "form-control" type="text" name="placeoforigin" size="20"/>
                        </div>

                        <div class="form-group">
                            <label>Marital Status</label>
                            <select name="marriage" class = "form-control">
                                <option selected value="0">Select Marital Status</option>
                                <option value="1">Single</option>
                                <option value="2">Married</option>
                                <option value="3">Divorced</option>
                                <option value="4">Widow</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Permanent Home Address</label>
                            <textarea name="address" class = "form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Next of Kin Address</label>
                            <textarea name="kinaddress" class = "form-control"rows="4"> </textarea>
                        </div>

                        <div class="form-group">
                            <label>Next of Kin Telephone</label>
                            <input class = "form-control" type="tel" name="kinphone" size="20"/>
                        </div>
                        <div class="form-group">
                            <label>Year of Entry</label>
                            <input class = "form-control" type="number" name="year"/>
                        </div>
                        <div class="form-group">
                            <label>Course Duration</label>
                            <input class = "form-control" type="text" name="coursetime" placeholder="Course Duration"/>
                        </div>
                        <input class = "btn btn-warning" type = "submit" value = "submit-form" style="text-align: center;position: center;display: block;margin: 20px"/>
                </div>
            </div>
        </form>
    </div>



@endsection
