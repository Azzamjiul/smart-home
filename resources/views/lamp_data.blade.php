@extends('layout.mainlayout')

@section('active-pir')
active
@endsection

@section('content-header')
@endsection

@section('content')
        <!-- Info boxes -->
            <!-- TABLE: LATEST ORDERS -->
            <div class="card col-12">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lamp Status Data</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="lamp_status" class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Sensor Name</th>
                      <th>Value</th>
                      <th>Data Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($pir_data as $data)
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
    $('#lamp_status').DataTable();
} );
</script>
@endsection