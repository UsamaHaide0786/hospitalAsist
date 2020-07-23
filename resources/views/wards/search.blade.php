@extends('base')
@section('content')
<link rel="stylesheet" href="{{asset('css/search.css')}}">
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('images/bg-img/12.jpg')">
  <form class="example" action="" style="margin:auto;max-width:300px">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center white">
          <h2>Find Ward</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <input type="text" placeholder="Name" name="name" required>
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>

  </section>
@endsection
