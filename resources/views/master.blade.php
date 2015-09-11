<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	
	<style type="text/css">
		/*
		body{
			background: url(" {{ asset('images/Library.jpg') }} ") no-repeat center center fixed;
			background-size: 100% auto;
		}
		*/
		header{
			opacity: 0.7;
		}
		footer{
			background-color: #fff;
			text-align: center;
			opacity: 0.9;
		}
	</style>
</head>
<body>
	<header class = "jumbotron">
		<div class="container">
			<div class="col-md-10">
				<h1>The Bookstore !</h1>
				<p>Reading a good book is like taking a journey.</p>
			</div>
			<div class="col-md-2"> 
				<a href="{{ url('/library') }}">Home</a> <br />
				
				@if (Auth::check())
					<a href="{{ url('/admin') }}"> {{Auth::user()->name}}'s Area </a> <br/ >
					<a href="/auth/logout">Logout</a> <br />
				@else
					<a href="/auth/login">Login</a> <br />
					<a href="/auth/register">Registration</a> 
				@endif

			</div>
			
			
		
		</div>
	</header>

	@yield ('content')

	<footer class = "conteiner">
		&copy; All Right Reserved for Abdur Razzak - 2015 
	</footer>
</body>
</html>