
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>HospitalAssist</title>


  <link rel="icon" href= "{{ URL::asset('images/core-img/favicon.ico') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/masterstyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('css/default-assets/classy-nav.css')}}">


</head>

<body>

  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>


  <header class="header-area">

    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">

          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="28 Ali Road, Lahore, 7788569 Pakistan"><i class="fa fa-map-marker"></i> <span>28 Ali Road, Lahore, 7788569 Pakistan</span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="usamaaa0786@gmail.com"><i class="fa fa-envelope"></i> <span>usamaaa0786@gmail.com</span></a>
            </div>
          </div>

          <div class="col-6 col-md-3 col-lg-4">
            <div class="top-header-social-info text-right">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">

          <nav class="classy-navbar justify-content-between" id="dentoNav">


            <a class="nav-brand" href=""><img src="{{ URL::asset('images/core-img/logo.png') }}" alt=""></a>


            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li><a href="">Hospitals</a></li>
                  <li><a href="">Doctors</a></li>
                  <li><a href="">Wardz</a></li>
                  <li><a href="">BestForYou</a></li>
                </ul>
                </ul>
              </div>
            </div>
            <a href="#" class="btn dento-btn booking-btn">Register</a>
            <a href="#" class="btn dento-btn booking-btn">Admin Login</a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  @section('content')

  @show
  <footer class="footer-area bg-img bg-gradient-overlay" >
    <div class="container">
      <div class="row">
        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget">
            <a href="" class="d-block mb-4"><img src="{{ URL::asset('images/core-img/logo.png') }}" alt=""></a>
            <p>With a background in the healthcare software industry and a desire to build great technology to help companies succeed in making healthcare better.</p>
            <div class="footer-contact">
              <p><i class="icon_pin"></i> 28 Ali Road, Lahore, 7788569 Pakistan</p>
              <p><i class="icon_phone"></i>+923047995329</p>
              <p><i class="icon_mail"></i> usamaaa0786@gmail.com</p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Opening Hours</h5>

            <!-- Opening Hours -->
            <ul class="opening-hours">
              <li><span>Mon-Wed</span> <span>8.00-18.00</span></li>
              <li><span>Thu-Fri</span> <span>8.00-17.00</span></li>
              <li><span>Sat</span> <span>9.00-17.00</span></li>
              <li><span>Sun</span> <span>10.00-17.00</span></li>
              <li><span>Holiday</span> <span>Closed</span></li>
            </ul>
          </div>
        </div>

        <!-- Single Footer Widget -->


        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Newsletter</h5>

            <p>We will send out weekly newest article and some great offers</p>
            <!-- Newsletter Form -->


            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://web.facebook.com/saqab.moon/" target="_blank">Usama Haider</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Popper js -->
  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- All js -->
  <script src="{{asset('js/dento.bundle.js')}}"></script>
  <!-- Active js -->
  <script src="{{asset('js/default-assets/active.js')}}"></script>

</body>

</html>
