@extends('frontendtemplate')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <x-sidebar-component></x-sidebar-component>

      </div>
      <!-- /.col-lg-3 -->

      
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
 

    {{-- Show items --}}
    <div class="row">
      <div class="col-md-12 mt-4">
        <p style="font-size: 30px;">Promotion Items</p>
      </div>
      @foreach($items as $item)
        <x-item-component :item="$item"></x-item-component>
      @endforeach
    </div>
    <!-- /.row -->

    {{--  --}}

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