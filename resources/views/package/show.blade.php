@extends('backendtemplate')

@section('content')
  <main class="app-content">
      <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> package </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('item.index')}}">package List</a></li>
      </ul>
    </div>
   <div class="container-fluid animated animatedFadeInUp fadeInUp">
  <h1 class="text-center mt-5 mb-4">Product Detail</h1>
  <div class="row">
    

    <div class='col-md-8  pt-5 mt-4 animated'>
      <table class="table table bordered" style="">
        <tbody>
          <tr><td>Product Name: {{$package->name}}</tr>
          <tr><td>Product Duration: {{$package->duration}}</tr>
          <tr><td>Product Price: {{$package->price}}</tr>
          <tr><td>Total: {{$package->total}}</tr>
        </tbody>
      </table>
      {{-- <p class='text-center'><a class='btn btn-primary px-2 add_to_cart hvr-icon-buzz-out' href='#' role='button' data-id='$id' data-name='$product_name' data-price='$product_price' data-photo='$product_photo'>Add to Cart  <i class='fa fa-shopping-cart hvr-icon' aria-hidden='true'></i></a></p> --}}
    </div>
  </div>


</div>
    

@endsection
