@extends('frontendtemplate')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container">

    <div class="logo float-left">
     <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
     <!-- Uncomment below if you prefer to use an image logo -->
     <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>

   </div>

   <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{route('mainpage')}}">Home</a></li>
        <li><a href="{{route('aboutpage')}}">About Us</a></li>
        <li><a href="{{route('servicepage')}}">Services</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li><a href="{{route('shoppage')}}">Shop</a></li>
        <li><a href="{{route('contactpage')}}">Contact Us</a></li>
       <li><a href="{{route('cartpage')}}">Cart<i class="icofont-shopping-cart"></i><span class="badge badge-light badge-notify cartNotistyle cartnoti ml-2"></span></a></li>
        <li><a href="{{route('signinpage')}}">Sign In</a></li>
      </ul>
    </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to Mr.Pet !</h2>
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
          <a href="{{route('signuppage')}}" class="btn-get-started animate__animated animate__fadeInUp">Click for Register</a>
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
        <p class="mt-3" style="font-size:20px;">Our services are geared towards meeting your dog’s unique needs and ensuring that your attention can be where you need it to be. When you know that your dog has been ran, walked, fed, relieved, and entertained, you can be present at work or wherever you need to be.</p>
      </div>

      <div class="row mt-5">
        @foreach($service_types as $row)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" >
          <div class="icon-box icon-box-pink">
            <div class=""><img src="{{$row->photo}}" style="border-radius: 50%;height: 80px; width:80px;"class="img-fluid mb-4"></div>
            <h4 class="title"><a href="">{{$row->name}}</a></h4>
            <p class="description">{{substr($row->description, 0,88)}}...</p>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Services Section -->


<!-- ======= Flash Sales ======= -->
<section class="flashsales" >
<div class="container">
   <div class="section-title">
        <h2>Flash Sales</h2>
<div class="col-lg-12">
  <div class="row mt-4 ">

    @foreach($items as $item)
    <x-item-component :item="$item"></x-item-component> 
    @endforeach
  </div>

</div>
</div>
</div>
</section>
<hr style="color:rgba(237, 126, 111,0.5)">
<!-- ======= Features Section ======= -->
    <section class="features" >
      <div class="container">

        <div class="section-title">
          <h2>Blogs</h2>
          <p>If you are a Dog Lover, You must read this...</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 mt-5">
            <img src="assets/img/1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h2 style="text-align: justify;">5 Benefits Of Having A Dog Walker When Working From Home</h2><br>
            <p class="font-italic">
              You are finally living the dream! Working from home!!  Roll out of bed, put the coffee on, and put Max out for his morning bathroom break. You settle in to start work and Max is begging you to go out for a walk… all day long!

              There are many benefits of hiring a dog walker in Edmonton while working from home:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Gives Your Dog Routine</li>
              <li><i class="icofont-check"></i> Keeps You Productive</li>
              <li><i class="icofont-check"></i> Keeps Your Pup From Barking While On An Important Zoom Call</li>
              <li><i class="icofont-check"></i> Lets You Wake Up Later Or Finish Work Early</li>
              <li><i class="icofont-check"></i> Keeps Your Pet Socialized</li>

            </ul>
          </div>
        </div>

        <div class="row mt-5" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2 mt-3">
            <img src="assets/img/2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h2>5 Tips For Camping With Dogs</h2><br>
            <p class="font-italic">
              Hallelujah, Provincial and National campgrounds have started to open up again and are even slowly expanding capacity! All the more reason for Albertans to explore this beautiful province of ours! Plus it’s a great way to spend time with family, friends and of course our fur babies.

              Whether you like to camp just outside of Edmonton or in the Rockies, there are many things to consider before heading out to ensure that you are well prepared and that everyone has a great time. 
            </p>
            <p>
              Things like: 
            </p>
             <ul>
              <li><i class="icofont-check"></i>Researching the rules and regulations of where you intend to camp</li>
              <li><i class="icofont-check"></i> What kind of pup do you have?</li>
              <li><i class="icofont-check"></i> Is your pup treated for ticks and fleas?</li>
              <li><i class="icofont-check"></i> What supplies does your dog need?</li>
              <li><i class="icofont-check"></i> Bringing a Pet First Aid Kit</li>

            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
</main><!-- End #main -->
@endsection

