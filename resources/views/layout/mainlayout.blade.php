<!DOCTYPE html>

<html lang="en">

 <head>
   @include('layout.partials.head')
 </head>

 <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        @include('layout.partials.nav')

        @include('layout.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-4">
                                @yield('content-header')
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
            @yield('content')
        </div> <!-- /.content-wrapper -->
    </div> <!-- ./wrapper -->

        @include('layout.partials.footer')

        @include('layout.partials.footer-scripts')
 </body>

</html>