@extends('base')
@section('content')
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Wards</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Wards Form -->
          <div class="wards-form">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="id" class="form-control" placeholder="ID" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="room" class="form-control" placeholder="No. of Rooms" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="doctor" class="form-control" placeholder="No. of Doctors" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="Operation_theater" class="form-control" placeholder="Operation Theaters" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="hospital_Id" class="form-control" placeholder="Hospital Id" required>
                  </div>
                </div>

                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn dento-btn">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

  </section>
@endsection
