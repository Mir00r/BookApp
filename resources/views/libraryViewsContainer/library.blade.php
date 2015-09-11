@extends ('master')
@section ('content')

	<div class="container" style="opacity: 0.9">
		<div class="row">
			@foreach ($sections as $k => $v)
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="images/{{$v}}">
						<h1><a class ="btn btn-primary">{{$k}}</a></h1>
					</div>
				</div>
			@endforeach

		</div>
	</div>
@stop