@extends('frontendtemplate')

@section('content')
  <div class="container">
    
    <div class="row my-5">
      <div class="col-md-6">
        <img src="{{asset($item->photo)}}" class="img-fluid d-block mx-auto" width="200px" height="200px">
      </div>
      <div class="col-md-6 mt-3">
        <h6><span class="badge badge-info">
          {{$item->codeno}}
        </span></h6>
        <p><strong>{{$item->name}}</strong></p>
        <h6>Price: @if($item->discount > 0)
                    {{number_format($item->discount)}} MMK 
                    <del class="text-danger">{{$item->price}} MMK</del>
                  @else
                    {{number_format($item->price)}} MMK
                  @endif
        </h6><br>
        <h6>Description: {{$item->description}}</h6>
        <!-- <p>Quentity: <input type="number" name="qty" class="form-control w-50 mt-2" value="1"></p> -->
        <div class="mt-3">
        {{-- <a href="{{route('cartpage')}} " class="btn btn-success addtocart" data-id="{{$item->id}}" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-price="{{$item->price}}">Add To Cart</a> --}}
        <a href="{{route('cartpage')}}" class="btn btn-success addtocart" data-id="{{$item->id}}" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
@endsection