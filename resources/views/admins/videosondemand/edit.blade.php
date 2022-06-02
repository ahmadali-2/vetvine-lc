@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Edit Video</strong>
                </div>
                <div class="card-body">
                    <div id="pay-invoice">
                            <form action="{{ route('videos-on-demand.update',$video->id)}}" method="post" id="videoform"
                                enctype="multipart/form-data" novalidate="novalidate" >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="video_title" class="control-label mb-1">Video Title</label>
                                            <input id="video_title" placeholder="Enter Title" name="video_title"
                                                type="text" class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{$video->video_title}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="video_link" class="control-label mb-1">Video Link</label>
                                            <input id="video_link" placeholder="Enter Link" name="video_link"
                                                type="url" class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{$video->video_link}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="presented_by" class="control-label mb-1">Presented By</label>
                                            <input id="presented_by" placeholder=" Enter presenter Name" name="presented_by"
                                                type="text" class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{$video->presented_by}}">
                                        </div>
                                    </div>

                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for="news_description" class="control-label mb-1">Video Description</label>
                                            <textarea class="form-control" id="video_description" rows="3" name="video_description" value="">{{$video->video_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="aad_video" class="control-label mb-1">Add Video</label>
                                            <input id="post_add_video" placeholder="" name="post_add_video"
                                                type="file" class="form-control" aria-required="true" aria-invalid="false"
                                                value="">
                                        </div>
                                    </div>
                                    @if($video->post_add_video)
                                    <div class="col-6 m-2">
                                        <div class="video-box">
                                            <iframe src=" {{ asset('/vetvineUsers/videos/'.$video->post_add_video)}} " alt="" id="" height="200px" title="YouTube video player"
                                               frameborder="0"
                                               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                               allowfullscreen></iframe>
                                         </div>
                                    </div>
                                    @endif
                             </div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Submit</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
