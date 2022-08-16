@extends('admins.master')
@section('content')
<style>
    .table tr td:not(:nth-child(1) , :nth-child(2), :last-child) {
        text-align: center;
       width: 35%;
       word-break: break-all;
       text-align: left;
    }
    .table tr td:last-child {
        width: 10%;
    }
    /* @media (max-width: 1200px){
        .card-body {
    padding: 15px;
    overflow-x: scroll !important;
}
    } */

</style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('videos-on-demand.create') }}">
                        Post Videos
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Videos</strong>
                    </div>
                    <div class="card-body">
                        <table class="table" id="ForumsTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $video->video_title }}</td>
                                        <td>{{ $video->video_link }}</td>
                                        <td>{!! Str::limit($video->video_description , 200) !!}</td>
                                        <td class="editRatingParent">
                                            <div id="stars_{{$video->id}}">
                                                <?php
                                                    $remainingRating = floor(5 - $video->average_rating);
                                                ?>
                                                @for ($i = 1; $i <= $video->average_rating; $i++)
                                                    <span class="fas fa-star" style="color: #FFC300"></span>
                                                @endfor
                                                @for ($i = 1; $i <= $remainingRating; $i++)
                                                    <span class="fa fa-star-o" style="color: #FFC300"></span>
                                                @endfor
                                            </div>
                                            <a id="edit_{{$video->id}}" data-id="{{$video->id}}" data-rating="{{$video->average_rating}}" style="cursor: pointer;"><i
                                                class="fas fa-edit text-primary"></i></a>
                                        </td>
                                        <td> <a href="{{ route('videos-on-demand.edit', $video->id) }}"><i
                                                    class="fas fa-edit text-primary"></i></a>
                                            <a href="javascript:void(0)" id="editCompany" class="video"
                                                data-id="{{ $video->id }}"><i class="far fa-eye text-info"></i></a>
                                            {{-- <a href="{{route('videos-on-demand.show', $video->id)}}"> <i class="far fa-eye text-info"></i></a> --}}
                                            <a href="javascript:void(0);" class="text-decoration-none"
                                                onclick="deleteRecord('{{ $video->id }}', '/superadmin/videos-on-demand/')">
                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <div class="modal fade" id="practice_modal">
        <div class="modal-dialog">
            <form id="companydata">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{-- <input type="hidden" id="color_id" name="color_id" value=""> --}}
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="video-box">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" id="videolink" src=""
                                        allowfullscreen></iframe>
                                </div>
                                {{-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ asset('/vetvineUsers/videos/'.$video->post_add_video)}}"allowfullscreen></iframe>
                       </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="edit_rating_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Video Rating Stars</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <input type="hidden" id="color_id" name="color_id" value=""> --}}
                <div class="modal-body">
                    <form class="form-group" id="edit_rating_modal_data">
                        <div class="row">
                            <div class="col-sm-8">
                                <input  type="number" name="edit_video_id" id="edit_video_id" hidden>
                                <input class="form-control" id="edit_rating_field" name="edit_rating_field" type="number" placeholder="Enter rating" min="1" max="5">
                            </div>
                            <div class="col-sm-4">
                                <a id="submit_edit_rating" class="btn btn-primary" style="">Update</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script type="text/javascript">
            // deleteRecord();
            $(document).ready(function(e) {
                $('.editRatingParent a').on('click', function(){
                    $('#edit_rating_modal').modal("show");
                    $('#edit_rating_field').val($(this).attr('data-rating'));
                    $('#edit_video_id').val($(this).attr('data-id'));
                });

                $('#submit_edit_rating').on('click', function(){
                    var formData = $('#edit_rating_modal_data').serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({

                        url: "{{ route('updateVideoRating') }}",
                        method: 'POST',
                        data: formData,
                        success: function(response) {
                            if(response.code == 200){
                                var video_star = '#stars_'+response.video_id;
                                var video_edit = '#edit_'+response.latest_rating;
                                $(video_star).empty();
                                $(video_star).append(response.html);
                                $()
                                toastr.success(response.message);
                                $('#edit_rating_modal').modal("hide");
                            }else{
                                toastr.error(response.message);
                            }
                        },
                    });
                });

                $(".video").on("click", function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('videoajaxdata') }}",
                        method: 'POST',
                        data: {
                            id: id,
                        },
                        success: function(response) {
                            var videolink = response.video_link;
                            $("#practice_modal").modal("show");
                            $("#videolink").attr('src', videolink);
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });

                })
            })
        </script>

    @endsection
