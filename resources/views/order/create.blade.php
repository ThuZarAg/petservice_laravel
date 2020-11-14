@extends('backendtemplate')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Item Create Form</h2>
          <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Item Name..." value="{{old('name')}}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
              <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
              @error('photo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Price: </label>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <input type="number" name="price" class="form-control" value="0">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="number" name="discount" class="form-control" value="0">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Description:</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Item Detail Description...">{{old('description')}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Brand:</label>
              <select name="brand" class="form-control">
                <optgroup label="Choose Brand">
                  @foreach($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>Categories:</label>
              <select name="category" class="form-control category">
                <optgroup label="Choose Category">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>Sub Category:</label>
              <select name="subcategory" class="form-control subcategory" disabled="true">
                <optgroup label="Choose Subcategory" class="subcategory_option">
                  @foreach($subcategories as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
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

      $('.category').change(function () {
        let categoryid = $(this).val();
        // alert(categoryid);
        $.post("{{route('filterCategory')}}",{cid:categoryid},function (response) {
          // console.log(response);
          var html = "";
          for(let row of response){
            html+=`<option value="${row.id}">${row.name}</option>`;
          }
          $('.subcategory').prop('disabled',false);
          $('.subcategory_option').html(html);
        })
      })
    })
  </script>
@endsection