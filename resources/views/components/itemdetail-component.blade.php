<div class="col-lg-3 col-md-6 my-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{asset($items->photo)}}" alt=""></a>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 14px;">
        <a href="#">{{$items->name}}</a>
      </h5>
      <h6>
      	@if($items->discount > 0)
        	{{number_format($item->discount)}} MMK <br>
        	<del class="text-danger">{{$items->price}} MMK</del>
      	@else
        	{{number_format($items->price)}} MMK
      	@endif
      </h6>
      <a href="{{route('itemdetail',$items->id)}}" class="btn btn-outline-danger mt-3" >Detail</a>
      <button class="btn btn-outline-danger addtocart mt-3"  data-id="{{$items->id}}" data-photo="{{asset($items->photo)}}" data-name="{{$items->name}}" data-price="{{$items->price}}" data-discount="{{$items->discount}}" data-name="{{$item->name}}" data-price="{{$item->price}}"> Cart</button>
      
    </div>
   
  </div>
</div>
