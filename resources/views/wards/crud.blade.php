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
						<h2>Manage <b>Wards</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('wards.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Rooms</th>
						<th>Doctors</th>
						<th>OperationTheaters</th>
            <th>HospitalName</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					foreach($wards as $ward)
					<tr>
						<td>{{$ward->id}}</td>
						<td>{{$ward->name}}</td>
						<td>{{$ward->room}}</td>
						<td>{{$ward->doctor_id}}</td>
            <td>{{$ward->operation_theater}}</td>
            <td>{{$ward->hospital_id}}</td>
						<td>
							<form action="{{ route('wards.destroy',$ward->id) }}" method="POST">
							<a href="{{ route('wards.edit',$ward->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
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
