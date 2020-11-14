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
          <h2 class="d-inline-block">Order List</h2>
          
         <!--  <form method="" action="" class="my-3">
            <div class="form-row">
              <div class="col-md-4">
                <label for="fromDate">From</label>
                <input type="date" name="from" class="form-control" id="fromDate">
              </div>

              <div class="col-md-4">
                <label for="toDate">To</label>
                <input type="date" name="to" class="form-control" id="toDate">
              </div>

              <div class="col-md-4">
                <label></label>
                <input type="submit" name="btnsubmit" value="Search" class="btn btn-primary mt-4">
              </div>
              
            </div>
          </form> -->

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm</a>
            </li>
          </ul>
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Orderno</th>
                    <th>Orderdate</th>
                    <th>Total Amount</th>
                    <th>Customer Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($pending_orders as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->orderno}}</td>
                    <td>
                      {{$row->orderdate}}
                    </td>
                    <td>{{number_format($row->totalamount)}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>
                      <a href="{{route('order.show',$row->id)}}" class="btn btn-primary">Detail</a>
                     <form method="post" action="{{route('order.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to cancel?')">
                      @csrf
                      @method('DELETE')
                     <button type="submit" name="btn-submit" class="btn btn-danger btn-delete">Cancel</button>
                     </form> 
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Orderno</th>
                    <th>Orderdate</th>
                    <th>Total Amount</th>
                    <th>Customer Name</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($confirmed_orders as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->orderno}}</td>
                    <td>
                      {{$row->orderdate}}
                    </td>
                    <td>{{number_format($row->totalamount)}}</td>
                    <td>{{$row->user->name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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