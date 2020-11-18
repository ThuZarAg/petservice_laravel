@extends('frontendtemplate')

@section('content')
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-nontransparent">
    <div class="container" >

      <div class="logo float-left">
       <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>
           
      </div>

     <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 20px;">{{$mysubcategory->name}}</h2>
        <ol>
          <li><a href="{{route('shoppage')}}">All Items</a></li>
          <li>{{$mysubcategory->name}}</li>
          <li><a href="{{route('cartpage')}}">Cart<i class="icofont-shopping-cart"></i><span class="badge badge-light badge-notify cartNotistyle cartnoti ml-2"></span></a></li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->
  <main id="main" >
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <x-sidebar-component></x-sidebar-component>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row mt-4">
          <div class="col-md-12">
            <h5>Filter By: {{$mysubcategory->name}}</h5>
          </div>
          @foreach($mysubcategory->items as $item)
            <x-item-component :item="$item"></x-item-component>
          @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
</main>
@endsection