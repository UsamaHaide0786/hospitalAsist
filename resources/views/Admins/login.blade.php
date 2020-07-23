@extends('base')
@section('content')

<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Admin Login</h2>
            <div class="line"></div>
           </div>
           </div>
         </div>

      <div class="row">
        <div class="col-12">
          <!-- Admin Login Form -->
          <div class="Login-form">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="Password" name="Password" class="form-control" placeholder="Password" required>
                  </div>
                </div>

				</div>

                <div class="col-12 text-center">
                  <button type="Login" class="btn dento-btn">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

  </section>
@endsection
