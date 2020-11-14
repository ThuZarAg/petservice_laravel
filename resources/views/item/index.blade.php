@extends('backendtemplate')

@section('content')

  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Mr.Pet</h1>
        <p>Bundles of Love, wrapped in fur.</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('item.index')}}">Item List</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2 class="d-inline-block">Item List</h2>
          <a href="{{route('item.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-3 table-bordered dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Code No</th>
					<th>Name</th>
					<th>Price</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@php 
		          $i=1;
		          @endphp
				@foreach($items as $item)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}</td>
					<td>
						<a href="{{route('item.edit',$item->id)}}" class="btn btn-warning">Edit</i></a>
						<a href="{{route('item.show',$item->id)}}"
							class="btn btn-primary">Detail</span>
						</a>
						<form method="post" action="{{route('item.destroy',$item->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-submit" class="btn btn-danger btn-delete">Delete</button>
						</form> 
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				
			</tfoot>
		</table>
        </div>
      </div>
    </div>
<div class="modal fade" id="detailModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title name"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" class="img-fluid itemImg w-50 d-block mx-auto">
					</div>
					<div class="col-md-6 content">
						
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</main>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection