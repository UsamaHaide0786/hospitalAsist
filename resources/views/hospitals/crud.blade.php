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
						<h2>Manage <b>Hospital</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>OwnerShip</th>
						<th>Since</th>
            <th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($hospitals as $h)
					<tr>
						<td>{{$h->id}}</td>
						<td>{{$h->name}}</td>
						<td>{{$h->address}}</td>
						<td>{{$h->ownership}}</td>
            <td>{{$h->since}}</td>

						<td>
							<a href="/update"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
						@endforeach
            </tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
@endsection
