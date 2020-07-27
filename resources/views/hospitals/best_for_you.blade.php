@extends('base')
@section('content')
<section class="dento-blog-area section-padding-100-0 clearfix">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Best Hospitals For You</h2>
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
            <a href="" class="post-title"><h1>Jinnah Hospital</h1></a>
            <p>Best Hospital for you</p>
            <h6>we are here to serve you</h6>

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
            <a href="" class="post-title"><h1>Doctors Hospital</h1></a>
            <p>Best Hospital for you</p>
            <h6>we are here to serve you</h6>
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
            <a href="" class="post-title"><h1>Genral Hospital</h1></a>
            <p>Best Hospital for you</p>
            <h6>we are here to serve you</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
