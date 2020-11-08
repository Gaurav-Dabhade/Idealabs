@extends('admin.indexfile')


@section('breadcrumb')
    <li class="breadcrumb-item active">Add Gif</li>
@endsection



@section('content')








    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <!-- end page title -->


    <div class="row">


        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <form method="post" enctype="multipart/form-data" action="/dashboard/store_gif">
                        @csrf
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productname">Title Name</label>
                                    <textarea id="textarea" name="title"  class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>

                                </div>





                            </div>
                        </div>

                        <h4 class="card-title">Drop Video Here</h4>
                        <div class="dropzone dropzone-previews" id="my-awesome-dropzone">
                        </div>




                        <button class="btn  btn-success waves-effect waves-light" type="submit"  name="publish" style="margin-top: 20px;">Publish Blog
                        </button>
                        <button class="btn  btn-secondary waves-effect waves-light" type="submit" name="draft" style="margin-top: 20px;" onclick="window.location.href='/dashboard/save_gif';">Save as Draft
                        </button>



                    </form>




                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->





@endsection

@section('script')


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



    @endsection


    </body>

    </html>
