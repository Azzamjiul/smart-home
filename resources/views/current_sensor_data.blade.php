@extends('layout.mainlayout')

@section('active-current-sensor')
active
@endsection

@section('content-header')
@endsection

@section('content')
        <!-- Info boxes -->
            <!-- TABLE: LATEST ORDERS -->
            <div class="card col-12">
              <div class="card-header border-transparent">
                <h3 class="card-title">Current Sensor Data</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="cursen_data" class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Sensor Name</th>
                      <th>Value</th>
                      <th>Data Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($cursen_data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->sensor_name}}</td>
                        <td>{{$data->value}}</td>
                        <td>{{$data->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
               
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection

@section('additional-js')
<script type="text/javascript">
$(document).ready(function() {
    $('#cursen_data').DataTable({
        "order":[[3, "desc"]]
    });
} );
</script>
@endsection