@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-nontransparent">
    <div class="container" >

      <div class="logo float-left">
       <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>
           
      </div>

     <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 20px;">Our Shop</h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li>Shop</li>
          <li><a href="{{route('cartpage')}}">Cart<i class="icofont-shopping-cart"></i><span class="badge badge-light badge-notify cartNotistyle cartnoti ml-2"></span></a></li>
        </ol>
      </div>

    </div>
   </section><!-- End Our Services Section -->
    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Your Shopping Cart </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container mt-5">
    <form method="" action="" class="checkoutform">
     {{--  <form method="post" action="{{route('order.store')}}">
        @csrf --}}
    
    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th colspan="3"> Product </th>
              <th colspan="2"> Qty </th>
              <th> Price </th>
              <th> Total </th>
            </tr>
          </thead>
          <tbody id="shoppingcart_body"> 

          </tbody>

          <tfoot >
            <div id="shoppingcart_tfoot">
              
            </div>
                      
            <tr>
                <td colspan="4">
                <textarea class="form-control notes" placeholder="Any Request..." required></textarea>
                </td>

                <td>
                  @role('customer')
                    <button class="btn btn-success btn-block mainfullbtncolor checkoutbtn"> Check Out 
                    </button>
                  @else
                    <a href="{{route('signinpage')}}" class="btn btn-success btn-block mainfullbtncolor checkoutbtn">
                    Sign in To Checkout</a>       
                  @endrole
                </td>

            </tr>
            
          </tfoot>
              
        </table>
      </div>
    </div>





    <!-- No Shopping Cart Div -->
    <div class="row mt-5 noneshoppingcart_div text-center">
      
      <div class="col-12">
        <h5 class="text-center"> There are no items in this cart </h5>
      </div>

      <div class="col-12 mt-5 ">
        <a href="{{route('shoppage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>

    </div>
    

    <div class="mb-5">
      
    </div>
  </form>
  </div>
 </main>

@endsection

@section('script')
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      $(document).ready(function () {
        $('.checkoutform').submit(function(e){
          let notes = $('.notes').val();
          if (notes === "") {
            return true;
          }else{
            let order = localStorage.getItem('itemlist'); // JSON String
            // console.log(order);
            $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
              alert(response.msg);
              localStorage.clear();
              location.href="/";
            })
            e.preventDefault();
          }
        })
      })
    </script>
@endsection