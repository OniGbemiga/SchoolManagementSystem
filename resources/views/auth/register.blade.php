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
    @include('include.messages')
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

	<div class="container" style="text-align: center;border:2px solid grey;width: 400px; height: 500px;
			margin-top: 20px;padding: 20px; align-content: center;display: block;position: center">

		<form role="form" action="{{route('register')}}" method="post">
            @csrf
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Name" name="name" style="height: 80px" value="{{old('name')}}" @error('name') is-invalid @enderror">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
			</div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" style="height: 80px" value="{{old('email')}}" @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="password" style="height: 80px" @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
			</div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" style="height: 80px" @error('password_confirmation') is-invalid @enderror">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
            </div>
			<div class="checkbox">
                <button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>
        <div>
            <span>Already Have an Account?</span>
            <a href="/"><button>LOGIN</button></a>
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
