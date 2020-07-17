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
                    <li><a href="#">Student</a></li>
                    <li><a href="#">Contact Us</a></li>
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
                <h3>University Of Education</h3>
                <h3>Student Information Portal</h3>
            </div>
        </div>
    </div>

	<div class="container" style="text-align: center;border:2px solid grey;float: center;width: 400px; height: 400px;
			margin-top: 20px;padding: 20px; align-content: center;display: block;position: center">

		<form role="form" action="{{route('login')}}" method="post">
            @csrf
			<div class="form-group">
				<input type="email" class="form-control" placeholder="Email" style="height: 80px" name="email" value="{{old('email')}}" @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" style="height: 80px" name="password" @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
			</div>
			<div class="checkbox">
				<label style="height: 50px"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}> Remember me</label>
			</div>
				<button type="submit" class="btn btn-primary">Login</button>
		</form>
        <div style="margin-top: 10px">
            <span>Don't Have an Account?</span>
            <a href="/register"><button>Register</button></a>
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
