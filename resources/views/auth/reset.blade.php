@extends ('master')
@section ('content')

	<div class = "container">
		{!! Form::open(["url" => "/password/reset"]) !!}
		{!! Form::hidden("token", $token) !!}

		<table class = "table" style= "width: 50%; margin: 0 auto;">
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
				<td colspan = "2">
					<h1 class = "well text-center">Send password reset link </h1>
				</td>
			</tr>
			<tr>
				<td>Enter your email address :</td>
				<td> {!! Form::email("email") !!} </td>
			</tr>
			<tr>
				<td>Enter your new password :</td>
				<td> {!! Form::password("password") !!} </td>
			</tr>
			<tr>
				<td>Confirm your password :</td>
				<td> {!! Form::password("password_confirmation") !!} </td>
			</tr>
			<tr>
				<td colspan = "2">
					{!! Form::submit("Reset password") !!}
				</td>
			</tr>

		</table>
		{!! Form::close() !!}
	</div>
@endsection