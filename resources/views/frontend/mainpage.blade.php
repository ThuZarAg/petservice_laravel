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
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">{{$row->name}}</a></h4>
            <p class="description">{{$row->description}}</p>
          </div>
          
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Features</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="assets/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="assets/img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Corporis temporibus maiores provident</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="assets/img/features-3.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
          <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="assets/img/features-4.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->
@endsection

