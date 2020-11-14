@extends('backendtemplate')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
      <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h2>Service Types Edit Form</h2>
        <form action="{{route('servicetype.update',$servicetype->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="name" value="{{$servicetype->name}}">
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>

          <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputDescription" name="description" value="{{$servicetype->description}}">
              <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-5">
              <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
            </div>
          </div>
        </form>
      </div>

      @endsection

