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
        <h2 style="margin-left: 20px;">{{$item->name}}</h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
         <li><a href="{{route('shoppage')}}">All Items</a></li>
         <li><a href="{{route('cartpage')}}">Cart<i class="icofont-shopping-cart"></i><span class="badge badge-light badge-notify cartNotistyle cartnoti ml-2"></span></a></li>
       </ol>
     </div>

   </div>
 </section><!-- End Our Services Section -->
</div>
</header><!-- End Header -->

<main id="main">
  <!-- ======= Our Services Section ======= -->
  <div class="container">

    <div class="row">
     <div class="col-lg-3">
      <x-sidebar-component></x-sidebar-component>
    </div>
    <div class="col-lg-3 mt-5">
      <img src="{{asset($item->photo)}}" class="img-fluid d-block mx-auto" width="200px" height="200px">
    </div> 
    <div class="col-lg-6 mt-5 pt-5">
      <h6>
        <span class="badge badge-info">{{$item->codeno}}</span> 
      </h6>

      <p><strong>{{$item->name}}</strong></p>

      <h6>Price: @if($item->discount > 0)
        {{number_format($item->discount)}} MMK 
        <del class="text-danger">{{$item->price}} MMK</del>
        @else
        {{number_format($item->price)}} MMK
        @endif
      </h6><br>

      <h6>Description: {{$item->description}}</h6>
      <!-- <p>Quentity: <input type="number" name="qty" class="form-control w-50 mt-2" value="1"></p> -->
      <div class="mt-3">
        {{-- <a href="{{route('cartpage')}} " class="btn btn-success addtocart" data-id="{{$item->id}}" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-price="{{$item->price}}">Add To Cart</a> --}}
        <a href="{{route('cartpage')}}" class="btn btn-success addtocart" data-id="{{$item->id}}" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">Buy Now</a>
      </div>
    </div>
</div>
</div>
</main>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
@endsection