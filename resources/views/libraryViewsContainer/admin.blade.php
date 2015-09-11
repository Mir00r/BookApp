@extends ('master')
@section ('content')


<div class="container">
		
	<div class="panel panel-default">
        <div class="panel-heading"><h1>Managing Sections</h1> </div>

        <div class="panel-body">
        	<h2> <br /> Creating new Section</h2>

        	<form action="library" method="POST" enctype="multipart/form-date">
				{!! csrf_field() !!}

				Enter the name of section : <input type="text" name="section_name" /> <br/>
				Upload an image : <input type="file" name="image" /> <br />
				
				<button class="btn btn-success" type="submit">
					<img src="{{asset('/images/add-icon.png')}}" width="25px" height="25px" /> CREATE
				</button>
			</form>

        </div>
        <table class="table">
			<tr>
				<th><h3>Section Name</h3></th>
				<th><h3>Total Books</h3></th>
				<th><h3>Update</h3></th>
				<th><h3>Delete</h3></th>
			</tr>

			<tr>
				<!-- Update exixting section -->	
				<form action="library" method="POST">
					{!! csrf_field() !!}

					<input type="hidden"  name="_method" value="PATCH" />
					<td><input type="text" name="section_name" value=""></td>
					<td><span class = "label label-default"></span></td>

					<td><img src=" {{ asset('/images/update.jpg') }} " width="25px" height="25px" onclick="submit()" /></td>
				</form>
				
				<td>
					<!-- Delete Section -->					
				<form action="library" method="POST">
							{!! csrf_field() !!}
						<input type="hidden"  name="_method" value="DELETE" />
						<img src=" {{ asset('/images/delete.jpg') }} " width="25px" height="25px" onclick="submit()" />
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
		</table>


    </div>
      
</div>

@stop