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
          <li><a href="{{route('mainpage')}}">Back to Home</a></li>
          <li><a href="{{route('servicepage')}}">Service</a></li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->

  <main id="main">
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Booking Received </h1>
  		</div>
	</div>

	<!-- Content -->
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-10 shadow p-3 mb-5 bg-white rounded">
				<div class="row">
					<div class="col-4">
						<img src="https://media.giphy.com/media/ibolLe3mOqHE3PQTtk/source.gif"  class="img-fluid">			

					</div>
					<div class="col-8 pt-5 mt-5">
						<h1> Your booking is completed! </h1>
						
					</div>
				</div>
				
			</div>

		</div>
	</div>
</main>
@endsection
