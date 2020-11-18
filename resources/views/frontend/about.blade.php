@extends('frontendtemplate')

@section('content')

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-nontransparent">
    <div class="container">

      <div class="logo float-left">
       <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>
           
      </div>

     <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 20px;"></h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li>About Us</li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->
  <main id="main">


    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 class="pb-3">We will be there for your dog when you can’t be!</h3>
            <p style="text-align:justify;">
             Let us help you find peace of mind knowing your dog is cared for when you are at work, on vacation, or busy taking care of other matters. Whether your dog needs to be ran, walked, or let out every single day, or only when you work late, or sporadically based on your shift work schedule, we are happy to accommodate your needs — and the needs of your four-legged friends!
            </p><br>
            
            <p>
              We are also available for puppy visits, senior dog check-ins, and overnight dog sitting in our homes.<br><br> Ready to get started? Please  <a href="{{route('book')}}">Book A Consult</a> with us so we can meet you and your pet!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
    <section class="services">
     
      <h2 class="text-center">Our Service</h2>
      <div class="row mt-5">
        @foreach($service_types as $row)
       <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" >
          <div class="icon-box icon-box-pink">
            <div class=""><img src="{{$row->photo}}" style="border-radius: 50%;height: 80px; width:80px;"class="img-fluid mb-4"></div>
            <h4 class="title"><a href="{{route('package',$row->id)}}">{{$row->name}}</a></h4>
            <p class="description">{{substr($row->description, 0,88)}}...</p>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Services Section -->

  </main><!-- End #main -->

@endsection