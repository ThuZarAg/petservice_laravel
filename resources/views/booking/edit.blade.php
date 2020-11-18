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
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Booking Edit Form</h2>
          <form method="post" action="{{route('booking.update',$booking->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="ownername" class="form-control @error('ownername') is-invalid @enderror" value="{{$booking->owner}}">
              @error('ownername')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$booking->email}}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Phone:</label>
              <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$booking->phone}}">
              @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Address:</label>
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$booking->address}}">
              @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Pet Name:</label>
              <input type="text" name="petname" class="form-control @error('petname') is-invalid @enderror" value="{{$booking->petname}}">
              @error('petname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Description:</label>
              <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$booking->description}}">
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Service Types:</label>
              <input type="text" name="service_type" class="form-control @error('service_type') is-invalid @enderror" value="{{$booking->servicetype->name}}">
              @error('service_type')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Packages:</label>
              <input type="text" name="package" class="form-control @error('package') is-invalid @enderror" value="{{$booking->package->name}}">
              @error('package')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Start Date:</label>
              <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{$booking->start_date}}">
              @error('start_date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            

            

            <div class="form-group">
              <input type="submit" name ="btnsubmit" value="Update" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection