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

    <div class="container" style="">
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

	<div class="container" style="text-align: center;border:2px solid grey;width: 400px; height: 400px;
			margin-top: 20px;padding: 20px; align-content: center;display: block;position: center">

		<form role="form">
			<div class="form-group">
				<input type="email" class="form-control" placeholder="Staff/Student ID number" style="height: 80px">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" style="height: 80px" >
			</div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" style="height: 80px" >
            </div>
			<div class="checkbox">
				<label style="height: 80px"><input type="checkbox"> Remember me</label>
                <button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>

	</div>

    <footer style="text-align: center; background-color: black; margin-top: 10px;padding: 10px">
        <span>&copy; All Rights reserved. Powered By <a href="#">GBEMIGA</a></span>
    </footer>
    </div>


<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
