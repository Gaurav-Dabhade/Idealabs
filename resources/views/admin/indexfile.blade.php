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
                                        <li class="breadcrumb-item"><a href="/">Idealabs</a></li>
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        @yield('breadcrumb')
                                    </ol>
                            </div>
                        </div>

                    </div>
                    <!-- end page title -->


                    <!-- end row -->
                    @yield('content')

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
            <script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
            @yield('script')
</body>

</html>
