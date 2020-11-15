@extends('frontendtemplate')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mr.Pet !</span></h2>
        <p class="animate__animated animate__fadeInUp">“We are providing Pet training Services and accessories & food for your pets.”</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Click for Register</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Nice To Meet You!</h2>
        <p class="animate__animated animate__fadeInUp">“A dog is the only thing on earth that loves you more than he loves himself”</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Click for Register</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">We’re here when you need us.</h2>
        <p class="animate__animated animate__fadeInUp">“Dogs are not our whole life, but they make our lives whole.”</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Click for Register</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">
     <div class="section-title">
      <h2>Our Services</h2>
      <p class="mt-3a">Our services are geared towards meeting your dog’s unique needs and ensuring that your attention can be where you need it to be. When you know that your dog has been ran, walked, fed, relieved, and entertained, you can be present at work or wherever you need to be.</p>
    </div>

    <div class="row mt-5">
      @foreach($service_types as $row)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" >
        <div class="icon-box icon-box-pink">
          <div class=""><img src="{{$row->photo}}" style="border-radius: 50%;height: 80px; width:80px;"class="img-fluid mb-4"></div>
          <h4 class="title"><a href="">{{$row->name}}</a></h4>
          <p class="description">{{$row->description}}</p>
        </div>

      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->
<div class="row mt-5">
      <h1> Discount Item </h1>
    </div>

      <!-- Disocunt Item -->
    <div class="row">
      
    @foreach($items as $item)

    <div class="col-12">
     
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
         @if($item->discount>0)
        <div class="MultiCarousel-inner">
       <img src="{{$item->photo}}">
        </div>
     {{number_format($item->discount)}}

     <del>{{$item->price}}</del>
     <p>{{$item->name}}</p>
       @endif
      </div>
 </div>
 @endforeach
</div>
<div class="row">
      <div class="col-md-12 mt-4">
        <h3 class="text-center mb-5">DOG SUPPLIES</h3>
      </div>
      <div class="row offset-md-1">
          @foreach($categories as $row)
        <div class="col-lg-2 col-md-3 col-sm-6 ml-4">
          <div class="card" >
            <a href="#"><img class="card-img-top img-fluid" src="{{asset($row->photo)}}" alt="" ></a>
            <div class="card-body">
              <h4 class="card-title" style="font-size: 13px;">
                <a href="#">{{$row->name}}</a>
              </h4>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>



</main><!-- End #main -->
@endsection

