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


      <div class=' pt-5  ml-2 animated in-right'>
        <table class="table table bordered" style="">

          <thead class="thead-dark">
            <tr>
              <th>Owner Name:</th>
              <th>Pet Name:</th> 
              <th>Service Types:</th> 
              <th>Package Name:</th> 
              <th>Start Date:</th> 
              <th>Email:</th> 
              <th>Phone:</th> 
              <th>Address:</th> 
              <th>Description:</th> 
            </th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$booking->owner}}</td> 
              <td>{{$booking->petname}}</td> 
              <td>{{$booking->servicetype->name}}</td> 
              <td>{{$booking->package->name}}</td> 
              <td>{{$booking->start_date}}</td> 
              <td>{{$booking->email}}</td> 
              <td>{{$booking->phone}}</td> 
              <td>{{$booking->address}}</td> 
              <td>{{$booking->description}}</td> 
            </tr>
          </tbody>
        </table>

      </div>


    </div>
    

    @endsection
