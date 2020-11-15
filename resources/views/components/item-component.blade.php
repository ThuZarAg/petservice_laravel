{{-- <div>
    No surplus words or unnecessary actions. - Marcus Aurelius
</div> --}}

<div class="col-lg-3 col-md-6 my-4">
  <div class="card h-100">
    <a href="#"><img class="img-fluid" src="{{asset($item->photo)}}" alt=""></a>
    <div class="card-body">
      <h6 class="card-title">
        <a href="#">{{$item->name}}</a>
      </h6>
      <h6>
      	@if($item->discount > 0)
        	{{number_format($item->discount)}} MMK <br>
        	<del class="text-danger">{{$item->price}} MMK</del>
      	@else
        	{{number_format($item->price)}} MMK
      	@endif
      </h6>
      <a href="#" class="btn btn-info " >Detail</a>
      <a href="#" class="btn btn-info " >Cart</a>
      
    </div>
   
  </div>
</div>