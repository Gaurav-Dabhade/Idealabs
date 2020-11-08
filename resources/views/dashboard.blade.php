@include('admin.include.header')


<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.include.topbar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.include.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4>Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>

                                    </ol>
                            </div>
                        </div>

                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Total GIF</h6>
                                    <h2 class="mb-4">{{$gifs->count()}}</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Toatal Videos</h6>
                                        <h2 class="mb-4">{{$videos->count()}}</h2>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end row -->


                    <!-- end row -->


                    <!-- end row -->

                    <!-- end row -->

      @include('admin.include.footer')
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->




        </div>
    </div>
            <!-- JAVASCRIPT -->
            <script src="/assets/libs/jquery/jquery.min.js"></script>
            <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="/assets/libs/simplebar/simplebar.min.js"></script>
            <script src="/assets/libs/node-waves/waves.min.js"></script>
            <script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

            <!--Morris Chart-->
            <script src="/assets/libs/morris.js/morris.min.js"></script>
            <script src="/assets/libs/raphael/raphael.min.js"></script>

            <script src="/assets/js/pages/dashboard.init.js"></script>

            <!-- App js -->
            <script src="/assets/js/app.js"></script>
</body>

</html>
