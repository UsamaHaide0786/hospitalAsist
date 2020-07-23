@extends('base')
@section('content')
<section class="dento-blog-area section-padding-100-0 clearfix">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h1>Hospital Name</h1>
          <hr>
          <h4>Add Details Of Your Hospital</h4>
          <hr>
          <div class="line"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="">
            <img src="{{ URL::asset('images/bg-img/7.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="" class="post-title"><h1>Wardz</h1></a>
            <hr>
            <a href="" class="post-title"><h1>Doctors</h1></a>
            <hr>
            <a href="" class="post-title"><h1>MedicalStores</h1></a>
          </div>
        </div>
      </div>

      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="">
            <img src="{{ URL::asset('images/bg-img/3.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="" class="post-title"><h1>HospitalCafes</h1></a>
            <hr>
            <a href="" class="post-title"><h1>Rooms</h1></a>
            <hr>
            <a href="" class="post-title"><h1>Patients</h1></a>
          </div>
        </div>
      </div>

      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="">
            <img src="{{ URL::asset('images/bg-img/13.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="" class="post-title"><h1>Beds</h1></a>
            <hr>
            <a href="" class="post-title"><h1>Laboratories</h1></a>
            <hr>
            <a href="" class="post-title"><h1>Employees</h1></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
