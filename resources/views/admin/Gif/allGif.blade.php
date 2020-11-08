@extends('admin.indexfile')


@section('breadcrumb')
    <li class="breadcrumb-item active">All Gif</li>
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
                    <h4 class="card-title">All Gifs</h4>


                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Tag</th>
                                    <th>Gif Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                             @endphp
                                @foreach ($gifs as $key=>$gif)
                                 <tr>
                                 <th scope="row">{{$no}}</th>
                                    <td>{{$gif->title}}</td>
                                    <td>{{$gif->tag}}</td>
                                    <td>{{$gif->gif}}</td>
                                 <td>{{$gif->status}}</td>
                                    @if($gif->status==0)

                                    <td> <button class="btn btn-outline-success waves-effect waves-light published" title="Change Status To Published" rel="{{$gif->id}}">Published</button></td>
                                    @else
                                    <td> <button type="button" class="btn btn-outline-danger waves-effect waves-light draft" title="Change Status To Draft" rel="{{$gif->id}}">Draft</button></td>

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
            text: "The Gif Will Be Remove From Draft!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:'POST',
                    url:'/dashboard/all_gif/published/'+$(this).attr('rel'),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {status: 1},
                    success: function(res) {
                        Swal.fire(
                            'Done!',
                            'Gif is published  Now!',
                            'success'
                        );
                        setTimeout(function(){
                            window.location.href="/dashboard/all_gif";
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
            text: "The Gif Will Be Draft!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:'POST',
                    url:'/dashboard/all_gif/draft/'+$(this).attr('rel'),
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {status: 0},
                    success: function(res) {
                        Swal.fire(
                            'Done!',
                            'Gif is draft  Now!',
                            'success'
                        );
                        setTimeout(function(){
                            window.location.href="/dashboard/all_gif";
                        }, 2000);
                    }
                });
            }
        })
    });
</script>
    @endsection


