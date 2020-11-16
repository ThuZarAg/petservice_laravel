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
        <h2 style="margin-left: 20px;">Our Services</h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li>Services</li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->

<main id="main">
  <!-- ======= Our Services Section ======= -->
  

  

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" >
      <div class="container">

        <div class="row" data-aos="fade-up" date-aos-delay="200">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us1.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=zVFTgSUhK6E" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <!-- <div class="icon"><i class="fas fa-paw"></i></div> -->
              <h5 class="" ><p style="font-family: Montserrat_Regular; line-height: 50px;">"We truly understand how to take care not only our pet but also yours as owners as well. You always look forward to our detailed and daily updates."</p></h5>
              
            </div>

            

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          @foreach($service_types as $row)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{$row->photo}}" alt="..." width="600px" height="400px">
              </div>
              <div class="card-body">

                <h5 class="card-title"><a href="#">{{$row->name}}</a></h5>
                <p class="card-text">{{$row->description}}</p>
                <div class="read-more"><a href="{{route('package',$row->id)}}"><i class="icofont-arrow-right"></i> Details for Book</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          
          <p>Dog Jogs owners Nikki and Steph are absolutely amazing with fur babies!! My dog Sophie has known them for as long as Sophie has been with me which was at 6 weeks old and she is now 6 years old. They are amazing with her and when Sophie is with them while I am away I do not worry at all. They take her out at least twice a day and one of those is for a run which she absolutely loves!!! I’m pretty sure if Sophie could talk she’d say she’d want to move in with Dog Jog owners Nikki and Steph and their fur babies. They also take care of her “special” dietary and medication needs. Sophie is in such caring, very active and loving hands.</p>
        </div>

        

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->
  @endsection