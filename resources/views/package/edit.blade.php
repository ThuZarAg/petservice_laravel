@extends('backendtemplate')

@section('content')
<main class="app-content">
	<div class="app-title">
      	<div>
            <h1> <i class="icofont-list"></i> Package </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('package.index')}}">Package List</a></li>
      </ul>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<h2>Package Edit Form</h2>
				<form action="{{route('package.update',$package->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="inputName" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputName" name="name" value="{{$package->name}}">
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
						<label for="inputduration" class="col-sm-2 col-form-label">duration</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputduration" name="duration" value="{{$package->duration}}">
							<span class="text-danger">{{ $errors->first('duration') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
						<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">
							<input type="number" class="form-control" id="inputPrice" name="price" value="{{$package->price}}">
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('total') ? 'has-error' : '' }}">
						<label for="inputtotal" class="col-sm-2 col-form-label">total</label>
						<div class="col-sm-5">
							<input type="number" class="form-control" id="inputtotal" name="total" value="{{$package->total}}">
							<span class="text-danger">{{ $errors->first('total') }}</span>
						</div>
					</div>
					
					<div class="form-group row {{ $errors->has('servicetype') ? 'has-error' : '' }}">
						<label for="inputservicetype" class="col-sm-2 col-form-label">servicetype</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputservicetype" name="servicetype">
								<optgroup label="Choose servicetype">
									@foreach($servicetypes as $servicetype)
									<option value="{{$servicetype->id}}" @if($servicetype->id == $package->servicetype_id){{'selected'}} @endif>{{$servicetype->name}}</option>
									@endforeach	
								</optgroup>
							</select>
							<span class="text-danger">{{ $errors->first('servicetype') }}</span>
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