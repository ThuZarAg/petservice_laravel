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
          <h2>Category Create Form</h2>
          <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
              <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
              @error('photo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection