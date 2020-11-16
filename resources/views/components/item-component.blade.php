{{-- <div>
    No surplus words or unnecessary actions. - Marcus Aurelius
</div> --}}

<div class="col-lg-3 col-md-6 my-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 14px;">
        <a href="#">{{$item->name}}</a>
      </h5>
      <h6>
      	@if($item->discount > 0)
        	{{number_format($item->discount)}} MMK <br>
        	<del class="text-danger">{{$item->price}} MMK</del>
      	@else
        	{{number_format($item->price)}} MMK
      	@endif
      </h6>
      <a href="{{route('itemdetail',$item->id)}}" class="btn btn-outline-danger mt-3" >Detail</a>
      <button class="btn btn-outline-danger addtocart mt-3"  data-id="{{$item->id}}" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-name="{{$item->name}}" data-price="{{$item->price}}"> Cart</button>
      
    </div>
   
  </div>
</div>
