@extends('layouts.adminMaster')

@section('content')

<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-sm-12">
                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="pull-left mr-3"><img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle"></span>
                            <div class="media-body text-white">
                                <h4 class="mt-1 mb-1 font-18">Michael A. Franklin</h4>
                                <p class="font-13 text-light"> User Experience Specialist</p>
                                <p class="text-light mb-0">California, United States</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <button type="button" class="btn btn-light waves-effect">
                                    <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-8">

                <div class="row">

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                            <span class="badge badge-custom"> +11% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                            <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                            <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                            <span class="badge badge-custom"> +89% </span> <span class="text-muted">Last year</span>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Experience</h4>
                    <div class="">
                        <div class="">
                            <h5 class="text-custom m-b-5">Lead designer / Developer</h5>
                            <p class="m-b-0">websitename.com</p>
                            <p><b>2010-2015</b></p>

                            <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                        </div>

                        <hr>

                        <div class="">
                            <h5 class="text-custom m-b-5">Senior Graphic Designer</h5>
                            <p class="m-b-0">coderthemes.com</p>
                            <p><b>2007-2009</b></p>

                            <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="card-box">
                    <h4 class="header-title mb-3">My Projects</h4>

                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Assign</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-info">Work in Progress</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-success">Pending</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-pink">Done</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-purple">Work in Progress</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-warning">Coming soon</span></td>
                                <td>Coderthemes</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->

@endsection
