@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <x-sidebar-component></x-sidebar-component>

      </div>
      
      {{-- Show items --}}

      <div class="col-lg-9">
        <div class="row mt-4">
          <div class="col-md-12">
            <h5>Available Items </h5>
          </div>
          @foreach($items as $item)
            <x-item-component :item="$item"></x-item-component>
          @endforeach
      </div>

    </div>
   

  </div>
@endsection


{{-- @section('script')
<script type="text/javascript" src="{{asset('my_asset/js/custom.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.subcategory').click(function (e) {
        e.preventDefault();
        let subcategory_id = $(this).data('id');
        $.post("{{route('bysubcategory')}}",{id:subcategory_id},function (response) {
          console.log(response);
        })
      })
    })
  </script>
@endsection --}}