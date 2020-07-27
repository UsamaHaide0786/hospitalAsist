@extends('base')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="{{asset('css/crud.css')}}">
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Doctors</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('doctors.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Timing</th>
						<th>Speciality</th>
						<th>Experience</th>
            <th>WardName</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($doctors as $doctor)
					<tr>
						<td>{{$doctor->id}}</td>
						<td>{{$doctor->first_name}}</td>
						<td>{{$doctor->timing}}</td>
						<td>{{$doctor->sepciality}}</td>
            <td>{{$doctor->experience}}</td>
            <td>{{$doctor->ward_id}}</td>
						<td>
							<form action ="{{ route('doctors.destroy',$doctor->id}}" method = "POST">
							<a href="{{ route('doctors.edit',$doctor->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<button type="submit" class="btn btn-danger">Delete</button>
</form>
						</td>
            </tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
@endsection
