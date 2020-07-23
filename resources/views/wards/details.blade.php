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
						<h2>Doctor Name</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
            <th><h4>Doctors</h4></th>

						<th><h4>MedicalStores</h4></th>
            <th><h4>Cafes</h4></th>
            <th><h4>TreatedPatients</h4></th>
            <th><h4>ApointmentDate</h4></th>
            <th><h4>AppointmentTime</h4></th>

					</tr>
				</thead>
				<tbody>
					<tr>
            <td>Usama</td>

            <td>clincs</td>
            <td>cokecafe</td>
            <td>Asad</td>
            <td>2020-01-14</td>
            <td>12:54 pm</td>
          </tr>


				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
@endsection
