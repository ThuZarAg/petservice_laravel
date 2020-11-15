@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Packages </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('package.index')}}">Packages List</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Packages Create Form</h2>
          <form method="post" action="{{route('package.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Types of Service:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
              @error('typeofservice')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>               

            <div class="form-group">
              <label>Duration:</label>
              <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror">
              @error('duration')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>         
            
             <div class="form-group">
              <label>Price:</label>
              <input type="text" name="price" class="form-control @error('price') is-invalid @enderror">
              @error('price')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>         
            <div class="form-group">
              <label>Total:</label>
              <input type="text" name="total" class="form-control @error('total') is-invalid @enderror">
              @error('total')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>  
            <div class="form-group row {{ $errors->has('service_type') ? 'has-error' : '' }}">
        <label for="inputSubcategory" class="col-sm-2 col-form-label">Service Type</label>
        <div class="col-sm-5">
          <select class="form-control form-control-md" id="inputSubcategory" name="servicetype">
            <optgroup label="Choose Service Type">
              @foreach($servicetype as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach 
            </optgroup>
          </select>
          <span class="text-danger">{{ $errors->first('row') }}</span>
        </div>
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