@extends('base')
@section('content')
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Appointments</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Medical stores Form -->
          <div class="Medical Stores-form">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="Id" class="form-control" placeholder="Id" required>
                  </div>
                </div>

				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="date_of_appointment" class="form-control" placeholder="Appointment Date" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="time_of_appointment" class="form-control" placeholder="Appointment Time" required>
                  </div>
                </div>

				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="patient_id" class="form-control" placeholder="Id of updating object" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="doctor_id" class="form-control" placeholder="Doctor Id" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="ward_Id" class="form-control" placeholder="Ward Id" required>
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
