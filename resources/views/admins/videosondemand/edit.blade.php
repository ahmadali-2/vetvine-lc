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
                        <form action="{{ route('videos-on-demand.update', $video->id) }}" method="post" id="videosform"
                            enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="video_title" class="control-label mb-1">Video Title</label>
                                        <input id="video_title" placeholder="Enter Title" name="video_title" type="text"
                                            class="form-control" aria-required="true" aria-invalid="false"
                                            value="{{ $video->video_title }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="video_link" class="control-label mb-1">Video Link</label>
                                        <input id="video_link" placeholder="Enter Link" name="video_link" type="url"
                                            class="form-control" aria-required="true" aria-invalid="false"
                                            value="{{ $video->video_link }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="presented_by" class="control-label mb-1">Presented By</label>
                                        <input id="presented_by" placeholder=" Enter presenter Name" name="presented_by"
                                            type="text" class="form-control" aria-required="true" aria-invalid="false"
                                            value="{{ $video->presented_by }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="aad_video" class="control-label mb-1">Add Video</label>
                                        <input id="post_add_video" placeholder="" name="post_addvideo" type="file"
                                            class="form-control" aria-required="true" aria-invalid="false" value="">
                                    </div>
                                </div>
                                <input type="hidden" name="category" value="{{ $video->category_id }}">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="aad_video" class="control-label mb-1 form-select">Add
                                            Category</label>
                                        <label for="aad_video" class="control-label mb-1">Add Category</label>
                                        <select id="category_id_id" name="category_id"
                                            aria-label="Default select example"
                                            class="form-control cc-number identified visa" value="" data-val="true">
                                            <option value=""selected disabled>Select Category</option>
                                            @foreach ($category as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $video->category_id ? 'selected' : '' }}>
                                                {{$item->category_title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="network_id" class="control-label mb-1 form-select">Select Sponsor
                                        </label>
                                        <select id="sponser_id" style="width: 100%" name="sponser_id[]"
                                            aria-label="Default select example"
                                            class="js-example-basic-multiple form-control" data-val="true"
                                            multiple="multiple">
                                            @foreach ($sponser as $sponsers)
                                            <option value="{{ $sponsers->id }}"
                                                @if (in_array($sponsers->id, $selectedMembers)) selected @endif>
                                                {{ $sponsers->sponser_name  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="news_description" class="control-label mb-1">Video Description</label>
                                        <textarea class="form-control ckeditor" id="video_description" rows="3" name="video_description" value="">{{ $video->video_description }}</textarea>
                                    </div>
                                </div>
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
