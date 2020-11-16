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
        <h2 style="margin-left: 20px;">Our Shop</h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li>Shop</li>
          <li><a href="{{route('cartpage')}}">Cart<i class="icofont-shopping-cart"></i><span class="badge badge-light badge-notify cartNotistyle cartnoti ml-2"></span></a></li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <x-sidebar-component></x-sidebar-component>

      </div>
      
      {{-- Show items --}}

      <div class="col-lg-9">
        <div class="row mt-4">
          <div class="col-md-12">
            <h5>Available Items </h5>
          </div>
          @foreach($items as $item)
            <x-item-component :item="$item"></x-item-component>
          @endforeach
      </div>

    </div>
   </div>
  </div>
</main>
@endsection


{{-- @section('script')
<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.subcategory').click(function (e) {
        e.preventDefault();
        let subcategory_id = $(this).data('id');
        $.post("{{route('bysubcategory')}}",{id:subcategory_id},function (response) {
          console.log(response);
        })
      })
    })
  </script>
@endsection --}}