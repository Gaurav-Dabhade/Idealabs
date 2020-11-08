<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Idealabs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/deassets/images/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file",
            url: "{{url('/web_uploads')}}",
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
            },
            accept: function(file, done) {
                if (file.name == ".mp4") {
                    done("Naha, you don't.");
                }
                else { done(); }
            }
        };
    </script>
</head>
<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">
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
                                        <li class="breadcrumb-item"><a href="/">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Add Business Branding</li>
                                    </ol>
                            </div>
                        </div>

                    </div>
                    <!-- end page title -->


                    <!-- end row -->
                    <div class="row">


                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <form method="post" enctype="multipart/form-data" action="/dashboard/store_web">
                                        @csrf
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="productname">Title Name</label>
                                                    <textarea id="textarea" name="title"  class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tag</label>
                                                    <select name="tag" class="form-control select2">


                                                            <option value="Website and App Development" selected>Website and App Development</option>

                                                    </select>
                                                </div>




                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Thumbnail Image <p>(Title Image should be 324X324 in dimensions) </p></label> <br/>
                                                    <img src="{{ URL::asset('assets/images/directory-bg.jpg') }}" id="preimage" name="titleImg2" alt="Blog image" class="img-fluid" style="max-width:200px" />
                                                    <br/>
                                                    <br>
                                                    <input type="file" name="titleImage" onchange="readURL(this);" class=" btn-primary waves-effect waves-light" data-buttonname="btn-secondary">

                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="card-title">Drop Video Here</h4>
                                        <div class="dropzone dropzone-previews" id="my-awesome-dropzone">
                                        </div>




                                        <button class="btn  btn-success waves-effect waves-light" type="submit"  name="publish" style="margin-top: 20px;">Publish Blog
                                        </button>
                                        <button class="btn  btn-secondary waves-effect waves-light" type="submit" name="draft" style="margin-top: 20px;" onclick="window.location.href='/admin/compose_video';">Save as Draft
                                        </button>



                                    </form>




                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

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


         <script>


            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#preimage')
                            .attr('src', e.target.result)
                            .width(200)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(document).ready(function () {


                                        var total_photos_counter = 0;
                Dropzone.options.myAwesomeDropzone = {
                    uploadMultiple: true,
                    parallelUploads: 2,
                    maxFilesize: 16,

                    resizeWidth: 360,
                    previewTemplate: document.querySelector('#preview').innerHTML,
                    addRemoveLinks: true,
                    dictRemoveFile: 'Remove file',
                    dictFileTooBig: 'Image is larger than 16MB',
                    timeout: 10000,

                    // init: function () {
                    //     this.on("removedfile", function (file) {
                    //         $.post({
                    //             url: '/adddeleteimage',
                    //             data: {id: file.name, _token: $('[name="_token"]').val()},
                    //             dataType: 'json',
                    //             success: function (data) {
                    //                 total_photos_counter--;
                    //                 $("#counter").text("# " + total_photos_counter);
                    //             }
                    //         });
                    //     });
                    // },
                    // success: function (file, done) {
                    //     total_photos_counter++;
                    //     $("#counter").text("# " + total_photos_counter);
                    // }
                };

            });
        </script>
        <script>
            // xhr.timeout=300000;
            // Dropzone.options={
            //          url: '/uploads',
            //                 thumbnailWidth: 200,
            //                 addRemoveLinks: true,
            //                 dictDefaultMessage: "<i class='fa fa-cloud-upload'></i>Drag and Drop to Upload",
            //                 autoProcessQueue : false,
            //                 headers : {
            //                     'X-XSRF-TOKEN': document.head.querySelector('[name="token"]').content
            //                 }
            // }



        </script>

</body>

</html>
