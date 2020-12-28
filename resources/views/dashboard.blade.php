@extends('layout.mainlayout')

@section('active-menu')
active
@endsection

@section('content-header')
Dashboard
@endsection

@section('content')
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lamp Status Now</span>
                <span class="info-box-number">
                  @if ($status == 1)
                    ON
                  @else
                    OFF
                  @endif
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Lamp Status (0 = OFF / 1 = ON)</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Date: {{$curtime->format('d-M-Y')}} at {{$curtime->hour}} o'clock</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="lampStatusChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Sensor Data</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Date: {{$curtime->format('d-M-Y')}} at {{$curtime->hour}} o'clock</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="sensorStatusChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection

@section('additional-js')
<script type="text/javascript">
var lampdat = <?php echo json_encode($lampdarr); ?>;
var sensdat = <?php echo json_encode($sensarr); ?>;
</script>
@endsection