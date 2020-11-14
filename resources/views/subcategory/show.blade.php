@extends('backendtemplate')

@section('content')

  <main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Subcategory </h1>
        </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('subcategory.index')}}">Subcategory List</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Subcategory Detail</h2>
          <div class="card-body">
                        <h5 class="card-title">Subcategory Name: <span class="text-primary">{{ $subcategory->name }}</span></h5>

                        {{-- category --}}
                        <h5 class="card-title">Category:
                            <span class="text-primary">
                                @foreach($categories as $category)
                                   @if($category->id == $subcategory->category_id)
                                   {{$category->name}}
                                   @endif
                                @endforeach
                            </span>
                        </h5>

          
        </div>
      </div>
    </div>
  </main>
@endsection