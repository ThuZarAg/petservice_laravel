@extends('backendtemplate')

@section('content')
  <main class="app-content">
      <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Booking </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('booking.index')}}">Booking List</a></li>
      </ul>
    </div>
   <div class="container-fluid animated animatedFadeInUp fadeInUp">
  <h1 class="text-center mt-5 mb-5">Booking Detail</h1>
  <div class="row">
    

    <div class='col-md-4 offset-md-2  pt-5 mt-4 ml-2 animated in-right'>
      <table class="table table bordered" style="">
        <tbody>
          <tr><td><h5>Owner Name: {{$booking->owner}}</h5></tr>
          <tr><td>Pet Name: {{$booking->petname}}</tr>
          <tr><td>Service Types: {{$booking->servicetype->name}}</tr>
          <tr><td>Package Name: {{$booking->package->name}}</tr>
          <tr><td>Start Date: {{$booking->start_date}}</tr>
        </tbody>
      </table>
      {{-- <p class='text-center'><a class='btn btn-primary px-2 add_to_cart hvr-icon-buzz-out' href='#' role='button' data-id='$id' data-name='$product_name' data-price='$product_price' data-photo='$product_photo'>Add to Cart  <i class='fa fa-shopping-cart hvr-icon' aria-hidden='true'></i></a></p> --}}
    </div>

    <div class='col-md-4  pt-5 mt-4 animated in-right'>
      <table class="table table bordered" style="">
        <tbody>
          <tr><td>Email: {{$booking->email}}</tr>
          <tr><td>Phone {{$booking->phone}}</tr>
          <tr><td>Address: {{$booking->address}}</tr>
          <tr><td>Description: {{$booking->description}}</tr>
        </tbody>
      </table>
      {{-- <p class='text-center'><a class='btn btn-primary px-2 add_to_cart hvr-icon-buzz-out' href='#' role='button' data-id='$id' data-name='$product_name' data-price='$product_price' data-photo='$product_photo'>Add to Cart  <i class='fa fa-shopping-cart hvr-icon' aria-hidden='true'></i></a></p> --}}
    </div>
  </div>


</div>
    

@endsection
