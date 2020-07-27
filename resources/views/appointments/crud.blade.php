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
						<h2>Manage <b>Appointments</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('appointments.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New</span></a>

					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Date</th>
						<th>Time</th>
						<th>PatientName</th>
						<th>DoctorName</th>
						<th>WardName</th>
            <th>HospitalName</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{$appointment->date_of_appointment}}</td>
						<td>{{4appointment->time_of_appointment}}</td>
						<td>{{$appointment->patient_id}}</td>
						<td>{{$appointment->doctor_id}}</td>
            <td>{{$appointment->ward_id}}</td>
            <td>{{$appointment->hospital_id}}</td>
						<td>
							<form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">
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
