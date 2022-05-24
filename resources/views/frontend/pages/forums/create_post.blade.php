@extends('frontend.master')
@section('content')
<style>
    #createpost input,#createpost textarea{
        border: 1px solid #ced4da !important;
    }
</style>
<section class="main_banner_bottob_label"></section>
<section class="become_member_area">
    <div class="container">
        <h2>
            <span>Posts
            </span>
        </h2>
    </div>
</section>
<section>
    <div class="container">
            <div class="row">
                <div class="col-lg-12"">
                    <form action="{{ route('forums-posts.store') }}" method="post" enctype="multipart/form-data" id="createpost">
                        @csrf
                        <input type="hidden" name="forum_id" value="{{$forum->id}}">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="post_title" class="control-label mb-1">Post Title</label>
                                    <input id="post_title" placeholder="Enter Title" name="post_title"
                                        type="text" class="form-control" aria-required="true" aria-invalid="false"
                                        value="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="post_photo" class="control-label mb-1">Add Photo</label>
                                    <input id="post_photo" placeholder="" name="post_photo"
                                        type="file" class="form-control" aria-required="true" aria-invalid="false"
                                        value="">
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="forum_description" class="control-label mb-1">Post
                                        Description</label>
                                    <textarea class="form-control ckeditor" id="description" rows="3" name="description" value=""></textarea>
                                </div>
                            </div>
                          </div>
                              <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="post_link" class="control-label mb-1">Add Link</label>
                                        <input id="post_link" placeholder="" name="post_link"
                                            type="url" class="form-control" aria-required="true" aria-invalid="false"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="post_add_video" class="control-label mb-1">Add Video</label>
                                        <input id="post_add_video" placeholder="" name="post_add_video"
                                            type="file" class="form-control" aria-required="true" aria-invalid="false"
                                            value="">
                                    </div>
                                </div>
                          </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary mt-3" value="POST">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div style="height: 50px;"></div>
</section>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\PostManagement\CreatePostManageRequest','#createpost') !!}
@endsection
