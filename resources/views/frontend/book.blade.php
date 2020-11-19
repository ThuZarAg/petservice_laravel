@extends('frontendtemplate')

@section('content')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-nontransparent">
  <div class="container">

    <div class="logo float-left">
     <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
     <!-- Uncomment below if you prefer to use an image logo -->
     <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>

   </div>

   <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 880px;"></h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li><a href="{{route('servicepage')}}">Service</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->
</div>
</header><!-- End Header -->

<main id="main">
  <div class="jumbotron jumbotron-fluid subtitle">
    <div class="container">
      <h1 class="text-center text-white">We’re Excited to Meet You! <i class="fas fa-hand-holding-heart ml-2"></i></h1>
    </div>
  </div>
  <div class="container my-5">
    <div class="my-5 text-center">
      <h3 class="">Please Fill Everything Correctly</h3>
    </div>
    <form method="POST" action="{{ route('booking.store') }}" class="">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Please write your name here</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="ownername" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Please enter your email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="name@example.com">
      </div><div class="form-group">
        <label for="exampleFormControlInput3">Please enter your phone no</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" name="phone" placeholder="Your Phone No">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Please Enter Your Address</label>
        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group">
          <label for="exampleFormControlInput4">Please write your pet's name</label>
          <input type="text" class="form-control" id="exampleFormControlInput4" name="petname" placeholder="Your Pet's Name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea2">Tell us about your pet(s)</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea2" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea3">What service do you need?</label>
          <select name="service" class="form-control" id="exampleFormControlSelect1">

            @foreach($service_types as $service)
            <option value="{{$service->id}}">{{$service->name}}</option>
            @endforeach
            
          </select>
        </div>

        <div class="form-group">
          <label>Which package do you need?</label>
          <select name="package" class="form-control package" disabled="true">
            <optgroup label="Choose Package" class="package_option">
              @foreach($packages as $package)
              <option value="{{$package->id}}">{{$package->name}}</option>
              @endforeach
            </optgroup>
          </select>
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlInput5">Please write which date you want to start</label>
          <input type="date" class="form-control" id="exampleFormControlInput5" name="start_date" placeholder="Start Date">
        </div>

       <input type="submit" id="request" value="Request Consult" class="btn btn-outline-danger my-3">

      </form>
    </div>
  </main>

  @endsection

  @section('script')
  <script type="text/javascript">
    $(document).ready(function () {

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#exampleFormControlSelect1').on('change', function () {
        //alert('ok');
        let serviceid = $(this).val();
        //alert(serviceid);
        $.post("{{route('filterService')}}",{sid:serviceid},function (response) {
           console.log(response);
          var html = "";
          for(let row of response){
            html+=`<option value="${row.id}">${row.name}</option>`;
          }
          $('.package').removeAttr('disabled');
          $('.package_option').html(html);
        })
      });
      $('#request').on('', function () {
    })
  </script>
  @endsection

 

