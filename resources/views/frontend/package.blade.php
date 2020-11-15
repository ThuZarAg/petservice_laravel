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

<!-- ======= Service Details Section ======= -->
<section class="service-details">
	<div class="container-fluid">

		<div class="row col-md-12">
			<div class="full-width-image">
				<img src="{{ asset('frontend_asset/images/services/dogjog.jpg') }}" alt="..." class="img-fluid" >

			</div>
		</div>

	</div>
</section><!-- End Service Details Section -->
	<div class="container">
      <div class="col-md-12">
        <div class="tile"> 
          <h2 class="d-inline-block">Package List</h2>
          <table class="table mt-3 table-bordered dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Total</th>
                
              </tr>
            </thead> 
            <tbody>
              @php 
                $i=1;
              @endphp
              @foreach($servicedetails as $row)
              <tr>
                <td>{{$i++}}</td>
                
                <td>{{$row->name}}</td>
                 <td>{{$row->duration}} </td>
                  <td>{{$row->price}} MMK Per dog</td>
                   <td>{{$row->total}}</td>
                
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<div class="my-5">
	<h3 class="text-center">We Always Start With A Consult For New Dogs</h3>
	<button class="btn btn-outline-danger">Book Now</button>
</div>
@endsection