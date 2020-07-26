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
						<a href="{{ route('hospitals.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
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
					@foreach ($hospitals as $hospital)
					<tr>
						<td>{{$hospital->id}}</td>
						<td>{{$hospital->name}}</td>
						<td>{{$hospital->address}}</td>
						<td>{{$hospital->ownership}}</td>
            <td>{{$hospital->since}}</td>

						<td>
							 <form action="{{ route('hospitals.destroy',$hospital->id) }}" method="POST">
							<a href="{{ route('hospitals.edit',$hospital->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Delete</button>
							</form>
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
