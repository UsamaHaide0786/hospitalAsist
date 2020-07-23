
@extends('base')
@section('content')
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Register Your Hospital</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Appointment Form -->
          <div class="appointment-form">
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
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="ownership" class="form-control" placeholder="ownership">
                  </div>
                </div>
								<div class="col-md-6">
									<div class="form-group mb-30">
										<input type="text" name="since" class="form-control" placeholder="1992-02-16 since">
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
