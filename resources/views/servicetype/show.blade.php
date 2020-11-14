@extends('backendtemplate')

@section('content')

  <main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Service Types </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('servicetype.index')}}">Services List</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Service Types Detail</h2>
          <div class="card-body">
                        <h5 class="card-title">Service Types: <span class="text-primary">{{ $servicetype->name }}</span></h5>

                        <img src="{{asset($servicetype->photo)}}" class="img-fluid" alt="">

                        <h5 class="card-title">Service Description: <span class="text-primary">{{ $servicetype->description }}</span></h5>

          
        </div>
      </div>
    </div>
  </main>
@endsection