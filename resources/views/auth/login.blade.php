@extends ('master')
@section ('content')

	<div class="container">
		{!! Form::open(["url" => "/auth/login"]) !!}
			<table class="table" style="width: 50%; margin: 0 auto;">
				@if (count($errors) > 0)
					<tr>
						<td colspan = "2">
							<div class = "alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						</td>
					</tr>
				@endif

				<tr>
					<td colspan="2">
						<h1 class="well text-center">Login Form</h1>
					</td>
				</tr>

				<tr>
					<td>Enter email address : </td>
					<td>
						{!! Form::email("email") !!}
					</td>
				</tr>

				<tr>
					<td>Enter Password : </td>
					<td>
						{!! Form::password("password") !!}
					</td>
				</tr>

				<tr>
					<td>Remember me ?</td>
					<td>
						{!! Form::checkbox("remember") !!}
					</td>
				</tr>

				<tr>
					<td >
						{!! Form::submit("Login") !!}
					</td>
					<td>
						<a href="/password/email">Forget Password</a>
					</td>
				</tr>
				<tr>
					<td colspan="2"	class="text-center">
						<!-- <a href="/auth/facebook"> -->
							<a href="/easyAuth/facebook">
							<img src=" {{ asset('images/fblogin.png') }} " width="200px" height="100px">
						</a>
					</td>
				</tr>

				<tr>
					<td colspan="2"	class="text-center">
						<a href="/">
							<img src=" {{ asset('images/github.png') }} " width="100px" height="50px">
						</a>
					</td>
				</tr>

			</table>

		{!! Form::close() !!}
	</div>

@endsection