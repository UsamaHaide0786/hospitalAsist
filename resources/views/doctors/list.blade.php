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
						<h2>All <b>Doctors</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
            <th><h2>FirstName</h2></th>
            <th><h2>LastName</h2></th>
						<th><h2>Address</h2></th>
					</tr>
				</thead>
				<tbody>
					<tr>
            <th><a href="" data-toggle="modal"><span><h3>Haroon</h3></span></a></th>
            <th><a href="" data-toggle="modal"><span><h3>Malik</h3></span></a></th>
            <th><a href="" data-toggle="modal"><span><h3>Lahore</h3></span></a></th>
            </tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
@endsection
