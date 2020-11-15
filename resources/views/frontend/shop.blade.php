@extends('frontendtemplate')

@section('content')
	<img src="{{asset('frontend_asset/images/shop_photo/5.jpg')}}" class="d-block w-100" alt="">

    <div class="row">
	    <div class="col-md-12 mt-4">
	    	<h3 class="text-center mb-5">DOG SUPPLIES</h3>
	    </div>
	    <div class="row offset-md-1">
	      	@foreach($categories as $row)
		    <div class="col-lg-2 col-md-3 col-sm-6 ml-4">
			  	<div class="card" >
			    	<a href="#"><img class="card-img-top" src="{{asset($row->photo)}}" alt="" ></a>
				    <div class="card-body">
				      <h4 class="card-title">
				        <a href="#">{{$row->name}}</a>
				      </h4>
				    </div>
			  	</div>
			</div>
			@endforeach
		</div>
	</div>

   
@endsection
