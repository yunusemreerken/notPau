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
        <link href="{{URL::asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{URL::asset('admin/assets/js/modernizr.min.js')}}"></script>
        <!-- table responsive css -->
        <link href="{{URL::asset('admin/plugins/responsive-table/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
        <style>

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            font-size: 12px;
            width: 120px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        </style>
    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('profile.left-side-menu')




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                @include('profile.topbar')



                @yield('content')

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
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

        <!-- Counter Up  -->
        <script src="{{URL::asset('admin/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- App js -->
        <script src="{{URL::asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{URL::asset('admin/assets/js/jquery.app.js')}}"></script>

        <!-- responsive table -->
        <script src="{{URL::asset('admin/plugins/responsive-table/js/rwd-table.min.js')}}" type="text/javascript"></script>
        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>
    </body>
</html>
