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
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('doctors.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Position</th>
						<th>Experience</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($employees as $employee)
					<tr>
						<td>{{$employee->first_name}}</td>
						<td>{{$employee->last_name}}</td>
						<td>{{$employee->position}}</td>
            <td>{{$employee->experience}}</td>
						<td>
							<form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
							<a href="{{ route('employees.edit',$employee->id) }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
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
