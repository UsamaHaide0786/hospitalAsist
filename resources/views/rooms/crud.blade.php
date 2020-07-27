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
						<h2>Manage <b>Rooms</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('rooms.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>No_OfBeds</th>
						<th>WardName</th>
						<th>HospitalName</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					foreach($rooms as $room)
					<tr>
						<td>{{$room->id}}</td>
						<td>{{$room->no_of_bed}}</td>
						<td>{{$room->ward_id}}</td>
						<td>{{$room->hospital_id}}</td>
            <td>
							<form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
							<a href="{{ route('rooms.edit',$room->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
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
