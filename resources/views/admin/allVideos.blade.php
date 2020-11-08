@extends('admin.indexfile')


@section('breadcrumb')
    <li class="breadcrumb-item active">All Videos</li>
@endsection



@section('content')








    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Videos</h4>


                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Tag</th>
                                    <th>Video Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                             @endphp
                                @foreach ($videos as $key=>$video)
                                 <tr>
                                 <th scope="row">{{$no}}</th>
                                    <td>{{$video->title}}</td>
                                    <td>{{$video->tag}}</td>
                                    <td>{{$video->video}}</td>
                                 <td>{{$video->status}}</td>
                                    @if($video->status==0)

                                    <td> <button class="btn btn-outline-success waves-effect waves-light published" title="Change Status To Published" rel="{{$video->id}}">Published</button></td>
                                    @else
                                    <td> <button type="button" class="btn btn-outline-danger waves-effect waves-light draft" title="Change Status To Draft" rel="{{$video->id}}">Draft</button></td>

                                        @endif
                                </tr>
                                @php
                                $no++;
                              @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- end row -->





@endsection

@section('script')

<script>
    jQuery('.published').click(function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "The Video will be Remove From Draft!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:'POST',
                    url:'/dashboard/all_videos/published/'+$(this).attr('rel'),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {status: 1},
                    success: function(res) {
                        Swal.fire(
                            'Done!',
                            'Video is published  Now!',
                            'success'
                        );
                        setTimeout(function(){
                            window.location.href="/dashboard/all_videos";
                        }, 2000);
                    }
                });
            }
        })
    });
</script>

<script>
    jQuery('.draft').click(function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "The Video Will Be Draft!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:'POST',
                    url:'/dashboard/all_videos/draft/'+$(this).attr('rel'),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {status: 0},
                    success: function(res) {
                        Swal.fire(
                            'Done!',
                            'Video is draft Now!',
                            'success'
                        );
                        setTimeout(function(){
                            window.location.href="/dashboard/all_videos";
                        }, 2000);
                    }
                });
            }
        })
    });
</script>
      <!-- Required datatable js -->
      <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
      <!-- Buttons examples -->
      <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

<script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/assets/js/pages/datatables.init.js"></script>






    @endsection

