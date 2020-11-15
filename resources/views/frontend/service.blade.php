@extends('frontendtemplate')

@section('content')
<main id="main">

  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Our Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Our Services</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->

  

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="{{ asset('frontend_asset\images\services\video.mp4') }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
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
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
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