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
						<h2>Manage <b>Patients</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('patients.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Address</th>
						<th>Mobile</th>
            <th>Age</th>
						<th>Gender</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					foreach($patients as patient)
					<tr>
						<td>{{$patient->id}}</td>
						<td>{{$patient->first_name}}</td>
						<td>{{$patient->last_name}}</td>
						<td>{{$patient->address}}</td>
            <td>{{$patient->mobile}}</td>
						<td>{{$patient->age}}</td>
            <td>{{$patient->gender}}</td>
						<td>
							<form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
							<a href="{{ route('patients.edit',$patient->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
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
