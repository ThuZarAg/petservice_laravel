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
					<h2 style="margin-left: 20px;">Packages</h2>
					<ol>
						<li><a href="{{route('mainpage')}}">Home</a></li>
						<li>Packages</li>
					</ol>
				</div>

			</div>
		</section><!-- End Our Services Section -->
	</div>
</header><!-- End Header -->
<main id="main">
 <!-- ======= Hero No Slider Section ======= -->
 <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-8">
        <h2>A tired dog is a happy dog!</h2>
      </div>
    </div>
  </div>
</section><!-- End Hero No Slider Sectio -->


<div class="container">
  <div class="col-md-12 body">
    <div class="package-column">
      <br>
      <p>Your dog is unique! We always tailor our services to your pup, but these are some general guidelines that we maintain:</p><br>
      <h4>Warm-Ups</h4>
      <p>Dogs benefit from starting&nbsp;periods of intense exercise with a warm-up — just like&nbsp;the <a href="https://dog-jogs.ca/about/dog-joggers/">dog joggers</a> who run with them! Each of our jogs and runs begin with a light warm-up to ensure your dog is ready for action. This part of a run is often the time when your dog will be at their most excited, so we focus on keeping them calm and gently discourage them from pulling and tugging on their leash. This focused restraint is an important activity that we use to stimulate&nbsp;your dog’s brain.</p><br>
      <h4>GPS Tracked</h4>
      <p>We track all of our runs and always share your dog’s&nbsp;map with you. Depending on where you live, we will either run on neighbourhood sidewalks or on City of Edmonton paths with your dog. We share a map image with you so you can know what your dog got up to without you — how fast they went, how far they went, and we always send a photo of them in action as well!</p><br>
      <h4>Bathroom Breaks</h4>
      <p>When you gotta go, you gotta go! We pause when your dog needs to pause, and we always clean up after them. We typically urge dogs to keep up a decent pace during runs, so we don’t stop to “smell the flowers”, but we always stop to give them time to relieve themselves at their leisure.</p><br>
      <h4>Distance/Time</h4>
      <p>The duration of a Dog Jogs dog run is between 4 and 10km. Various reasons impact the length of a run, such as: weather (too hot or too cold), and your dogs age, health, and fitness level.</p><br>
      <h4>Positive Reinforcement</h4>
      <p>Also known as… TREATS! Treats are not a big part of our dog runs, but we do use them as positive rewards (with your permission, of course). Please let us know if your pup has any allergies!</p><br>
      <h4>The Finish Line</h4>
      <p>After your dog’s run, we ensure they are clean and dry and have access to water in your home. Please leave out a towel just in case we end up running on a wet day.</p>
      <h4>Our Packages</h4>

      <table id="tablepress-1" class="tablepress tablepress-id-1">
        <thead>
          <tr class="row-1 odd">
            <th class="column-1">No</th><th class="column-2">Name</th><th class="column-3">Duration</th><th class="column-4">Price</th>
          </tr>
        </thead>
        
        <tbody>
           @php 
          $i=1;
          @endphp
          @foreach($servicedetails as $row)
          <tr class="row-2 even">
            <td class="column-1">{{$i++}}</td><td class="column-2">{{$row->name}}</td><td class="column-3">{{$row->duration}}</td><td class="column-4">{{$row->price}} MMK<br> Per dog</td>
          </tr>
           @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="my-5 text-center">
	<h3 class="">We Always Start With A Consult For New Dogs</h3>
	<button class="btn btn-outline-danger my-3">Book A Consult Now</button>
</div>
</main>

@endsection