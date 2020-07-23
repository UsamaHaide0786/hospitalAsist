@extends('base')
@section('content')
<section class="welcome-area">

  <!-- Welcome Slides -->
  <div class="welcome-slides owl-carousel">
    <!-- Single Welcome Slide -->
    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url('/images/bg-img/1.jpg')">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Welcome Text -->
            <div class="welcome-text text-center">
              <h2 data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Health Care</h2>
              <p data-animation="fadeInUp" data-delay="300ms">As a leading industry innovator, HospitaAssist is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                offer you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single Welcome Slide -->
    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url('images/bg-img/14.jpg')">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Welcome Text -->
            <div class="welcome-text text-center">
              <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Health Care</h2>
              <p data-animation="fadeInDown" data-delay="300ms">As a leading industry innovator, HospitaAssist is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                offer you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** Blog Area Start ***** -->
<section class="dento-blog-area section-padding-100-0 clearfix">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>What You Are Looking For</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="./blog-details.html">
            <img src="{{ URL::asset('images/bg-img/7.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="./blog-details.html" class="post-title"><h1>Find a Hospital</h1></a>
            <p>Go for a Hospital of your choice</p>
            <h6>we are here to serve you</h6>

          </div>
        </div>
      </div>

      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="./blog-details.html">
            <img src="{{ URL::asset('images/bg-img/3.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="./blog-details.html" class="post-title"><h1>Find a Doctor</h1></a>
            <p>Go for a Doctor of your choice</p>
            <h6>we are here to serve you</h6>
          </div>
        </div>
      </div>

      <!-- Single Blog Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-item mb-100">
          <a href="./blog-details.html">
            <img src="{{ URL::asset('images/bg-img/13.jpg') }}" alt="">
          </a>
          <!-- Blog Content -->
          <div class="blog-content">
            <a href="./blog-details.html" class="post-title"><h1>Find a ward</h1></a>
            <p>Go for a ward of your choice</p>
            <h6>we are here to serve you</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="dento-about-us-area section-padding-100-0">
  <div class="container">
    <div class="row align-items-center">
      <!-- About Us Thumbnail -->
      <div class="col-12 col-md-6">
        <div class="about-us-thumbnail mb-50">
          <img src="{{ URL::asset('images/bg-img/19.jpg') }}" alt="">
        </div>
      </div>
      <!-- About Content -->
      <div class="col-12 col-md-6">
        <div class="about-us-content mb-50">
          <!-- Section Heading -->
          <div class="section-heading">
            <h2>About Us</h2>
            <div class="line"></div>
          </div>
          <p>Over 180 developers in 40 diffrent specialties work together with the 2,000+ employees at HospitaAssist Medical Center to offer a full and best spectrum of diagnostic and treatment services for people of all ages..</p>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Experience Doctors</h6>
            <div id="bar1" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="80"></span>
            </div>
          </div>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Modern Equipment</h6>
            <div id="bar2" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="65"></span>
            </div>
          </div>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Friendly Staff</h6>
            <div id="bar3" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="85"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ****** About Us Area End ****** -->

<div class="container">
  <div class="dento-border clearfix"></div>
</div>

<!-- Cool Facts Area Start -->
<section class="dento-cta-area">
  <div class="container">
    <div class="row">
      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_genius"></i>
          <h2><span class="counter">20</span></h2>
          <h5>Years Of Experience</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_heart_alt"></i>
          <h2><span class="counter">700</span>+</h2>
          <h5>Happy Users</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_book_alt"></i>
          <h2><span class="counter">120</span></h2>
          <h5>Certificate</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_id"></i>
          <h2><span class="counter">40000</span>+</h2>
          <h5>Doctors</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Cool Facts Area End -->

<!-- Dento Service Area Start -->
<section >
  <div class="welcome-slides owl-carousel">
    <!-- Single Welcome Slide -->
    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url('images/bg-img/1.jpg')"}>
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Welcome Text -->
            <div class="welcome-text text-center">
              <h2 data-animation="fadeInDown" data-delay="100ms">Our Vision</h2>
              <h2 data-animation="fadeInUp" data-delay="100ms">Your Health is Our Primary Concern</h2>
              <p data-animation="fadeInUp" data-delay="300ms">We serve our communities by providing exceptional care, as we prevent illness, restore health and provide comfort to all who entrust us with their care.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single Welcome Slide -->
    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url('images/bg-img/14.jpg')">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Welcome Text -->
            <div class="welcome-text text-center">
              <h2 data-animation="fadeInDown" data-delay="100ms">Our Vision</h2>
              <h2 data-animation="fadeInDown" data-delay="100ms">Combining Quality Care& Modern Conveniences.</h2>
              <p data-animation="fadeInDown" data-delay="300ms">We started One Medical with the belief that clinical excellence commitment to service and a modern approach make for a truly great experience. To bring our vision to life, we listened to our patients. thoughtfully applied technology, and hired the best doctors to create a practice that is designed specifically to meet your needs.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Testimonials Area End ***** -->


@endsection
