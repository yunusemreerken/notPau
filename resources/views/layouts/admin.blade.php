<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{URL::asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('admin/assets/css/style_dark.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{URL::asset('admin/assets/js/modernizr.min.js')}}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.left-side-menu')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                @include('admin.topbar')
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © NOT PAU. 
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{URL::asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/jquery.slimscroll.js')}}"></script>

        <!-- Flot chart -->
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.min.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/curvedLines.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/flot-chart/jquery.flot.axislabels.js')}}"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="URL::asset('admin/plugins/jquery-knob/jquery.knob.js')"></script>

        <!-- Dashboard Init -->
        <script src="{{URL::asset('admin/assets/pages/jquery.dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{URL::asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/jquery.app.js')}}"></script>

    </body>
</html>
