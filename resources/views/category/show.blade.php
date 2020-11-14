@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
          <h1> <i class="icofont-list"></i> Category </h1>
      </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category List</a></li>
    </ul>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Category Detail</h2>

          <img src="{{asset($category->photo)}}" class="img-fluid" alt="">

          <p>{{$category->name}}</p>
        </div>
      </div>
    </div>
  </main>
@endsection