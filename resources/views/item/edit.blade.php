@extends('backendtemplate')

@section('content')
<main class="app-content">
	<div class="app-title">
      	<div>
            <h1> <i class="icofont-list"></i> Item </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('item.index')}}">Item List</a></li>
      </ul>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<h2>Brand Edit Form</h2>
				<form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group row {{ $errors->has('codeno') ? 'has-error' : '' }}">
						<label for="inputCodeno" class="col-sm-2 col-form-label">Code No</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputCodeno" name="codeno" value="{{$item->codeno}}">
							<span class="text-danger">{{ $errors->first('codeno') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="inputName" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputName" name="name" value="{{$item->name}}">
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
					</div>
					<div class="form-group row">
               <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>

              <div class="col-sm-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                  </li>
                </ul>
              
                <div class="tab-content mt-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img src="{{asset($item->photo)}}" class="img-fluid" alt="">
                    <input type="hidden" name="oldphoto" value="{{$item->photo}}">
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                    @error('photo')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
            </div>
          </div>
					
					<div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
						<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">
							<input type="number" class="form-control" id="inputPrice" name="price" value="{{$item->price}}">
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('discount') ? 'has-error' : '' }}">
						<label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-5">
							<input type="number" class="form-control" id="inputDiscount" name="discount" value="{{$item->discount}}">
							<span class="text-danger">{{ $errors->first('discount') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
						<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-5">
							<textarea id="inputDescription" class="form-control" name="description">{{$item->description}}</textarea>
							<span class="text-danger">{{ $errors->first('description') }}</span>
						</div>
					</div>
					
					<div class="form-group row {{ $errors->has('subcategory') ? 'has-error' : '' }}">
						<label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
								<optgroup label="Choose Subcategory">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}" @if($subcategory->id == $item->subcategory_id){{'selected'}} @endif>{{$subcategory->name}}</option>
									@endforeach	
								</optgroup>
							</select>
							<span class="text-danger">{{ $errors->first('subcategory') }}</span>
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