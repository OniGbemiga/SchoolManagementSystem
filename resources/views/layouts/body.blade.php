<!DOCTYPE html>
<html>
<head>
    <title>student page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>

<div class="">
    <nav class="navbar navbar-inverse" id="my-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#Home">Home</a></li>
                    <li><a href="#Showcase">Student</a></li>
                    <li><a href="#Services">Staff</a></li>
                    <li><a href="#Designers">FAQs</a></li>
                    <li><a href="#Packages">Contact Us</a></li>
                </ul>
                <p style="float: right; color: blue">Welcome guest</p>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-bottom: 10px">
        <div class="row" id="Home" style="background-color: grey">
            <div class="col-md-3">
                <img src="../images/logo.png"/>
            </div>
            <div class="col-md-9">
                <h3>Obafemi Awolowo University</h3>
                <h3>Student Information Portal</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div style="background-color: white">
            <div class="row">
                <div class="col-md-3" style="background-color: transparent; border: 1px solid blue;">
                    <h3>Profile Menu</h3>
                    <ul class="list-group">
                        <a href="{{route('profile')}}">
                            <li class="list-group-item">Profile Page</li>
                        </a>
                        <a href="/payment">
                            <li class="list-group-item">Payment Activities</li>
                        </a>
                        <a href="{{route('biodata')}}">
                            <li class="list-group-item">Update Biodata information</li>
                        </a>
                        <a href="{{route('course')}}">
                            <li class="list-group-item">Register Courses</li>
                        </a>
                        <a href="/results">
                            <li class="list-group-item">View Results</li>
                        </a>
                        <a href="/reports">
                            <li class="list-group-item">Reports</li>
                        </a>
                        <a href="/doc">
                            <li class="list-group-item">Documentation</li>
                        </a>
                        <a href="#">
                            <li class="list-group-item">Sign Out</li>
                        </a>
                    </ul>
                </div>

                @yield('content')

            </div>
        </div>
    </div>


    <footer style="text-align: center; background-color: black; margin-top: 10px;padding: 10px">
        <span>&copy; All Rights reserved. Powered By <a href="#">GBEMIGA</a></span>
    </footer>
</div>


<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
