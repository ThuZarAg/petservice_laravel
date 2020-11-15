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
        <li class="breadcrumb-item"><a href="{{route('package.index')}}">Package List</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile"> 
          <h2 class="d-inline-block">Package List</h2>
          <a href="{{route('package.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-3 table-bordered dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Total</th>
                <th>Actions</th>
              </tr>
            </thead> 
            <tbody>
              @php 
                $i=1;
              @endphp
              @foreach($packages as $row)
              <tr>
                <td>{{$i++}}</td>
                
                <td>{{$row->name}}</td>
                 <td>{{$row->duration}} </td>
                  <td>{{$row->price}} MMK Per dog</td>
                   <td>{{$row->total}}</td>
                <td>
                  <a href="{{route('package.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                  <a href="{{route('package.show',$row->id)}}" class="btn btn-info">Show</a>
                  <form method="post" action="{{route('package.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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