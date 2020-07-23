@extends('base')
@section('content')
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Patients</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Patients Form -->
          <div class="Patients-form">
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
                    <input type="text" name="age" class="form-control" placeholder="Age" required>
                  </div>
                </div>

				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="gender" class="form-control" placeholder="Gender" required>
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
