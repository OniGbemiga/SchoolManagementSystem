@extends('layouts.body')

@section('content')

    <div class="">
        <h3 style="text-align: center"> REGISTRATION FORM </h3>

        <form action="/course" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6" style = "border: 10px solid grey; border-radius: 20px 20px 20px 20px;position: center;display: block;text-align: center;margin-left: 150px">
                <!-- left side of form -->
                <div class = "col-lg-6"; style="color: blue">

                    <ul class = "list-group" style = "margin-top: 10px">
                        <li class="list-inline">Registration Number: <span>zoo/2013/052</span></li><br/><br/>
                    </ul>

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="chemistry" value="chemistry">CHEMISTRY
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="physics" value="physics">PHYSICS
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="biology" value="biology">BIOLOGY
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="geography" value="geography">GEOGRAPHY
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="economics" value="economics">ECONOMICS
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="agric" value="agric">AGRICULTURAL SCIENCE
                            </label>
                        </div>
                </div>

                <!-- right side of form -->
                <div class = "col-lg-4"; style="color: blue">

                    <ul class = "list-group" style = "margin-top: 10px">
                        <li class="list-inline">JAMB Reg Num: <span>324564KB</span></li><br/>
                    </ul>

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="government" value="government">GOVERNMENT
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="literature" value="literature">LITERATURE
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="accounting" value="accounting">ACCOUNTING
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="commerce" value="commerce">COMMERCE
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="arts" value="arts">FINE ARTS
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="civic" value="civic">CIVIC EDUCATION
                            </label>
                        </div>
                    <input class = "btn btn-warning" type = "submit" value = "submit-form" style="text-align: center;position: center;display: block;margin: 20px"/>
                </div>
            </div>
        </form>
    </div>



@endsection
