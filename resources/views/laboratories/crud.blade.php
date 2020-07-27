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
						<h2>Manage <b>Laboratories</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('laboratories.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>

					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>WardName</th>
						<th>HospitalName</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					($laboratories as $laboratory)
					<tr>
						<td>{{$laboratory->id}}</td>
						<td>{{$laboratory->name}}</td>
						<td>{{$laboratory->ward_id}}</td>
						<td>{{$laboratory->hospital_id}}</td>
            <td>
							<form action="{{ route('laboratories.destroy',$laboratory->id) }}" method="POST">
							<a href="{{ route('laboratories.edit',$laboratory->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
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
