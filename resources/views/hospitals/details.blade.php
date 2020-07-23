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
						<h2>Hospital Name(OwnerShip)</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
            <th><h4>Doctors</h4></th>
						<th><h4>Wardz</h4></th>
            <th><h4>Laboratories</h4></th>
            <th><h4>MedicalStores</h4></th>
            <th><h4>Cafes</h4></th>
            <th><h4>TreatedPatients</h4></th>
					</tr>
				</thead>
				<tbody>
					<tr>
            <td>UsamaHaider</td>
            <td>Ent</td>
            <td>Chugtais</td>
            <td>clinics</td>
            <td>cokecafe</td>
            <td>Haroon</td>
						</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
@endsection
