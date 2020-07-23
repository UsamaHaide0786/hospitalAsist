@extends('base')
@section('content')
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Doctors</h2>
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
                    <input type="text" name="Id" class="form-control" placeholder="Id" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="timing" class="form-control" placeholder="Timing" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="speciality" class="form-control" placeholder="Speciality" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="experience" class="form-control" placeholder="Experience" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="date_of_joing" class="form-control" placeholder="Joing Date" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="ward_Id" class="form-control" placeholder="Ward Id" required>
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
