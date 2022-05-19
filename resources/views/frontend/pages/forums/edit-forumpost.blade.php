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
            <span>Edit Post
            </span>
        </h2>
    </div>
</section>
<section>
    <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 p-5">
                    <form action="{{route('forums-posts.update',$post->id)}}" method="post" id="createpost" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="forum_id" value="{{$post->forum_id}}">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Post Title</h6>
                                <input type="text" placeholder="" required class="form-control" name="post_title"
                                    value="{{ $post->post_title }}" />
                            </div>
                            <div class="col-sm-6">
                                <h6>Add Photo</h6>
                                <input type="file" placeholder="" required class="form-control" name="post_photo"
                                    value="{{ $post->post_photo }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Add Link</h6>
                                <input type="url" placeholder="" required class="form-control" name="post_link"
                                    value="{{ $post->post_link }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-4">
                                <h6>Post Description</h6>
                                <textarea placeholder="" class="form-control ckeditor" id="description" name="description"
                                    value="{{ $post->post_description }}">{{ $post->post_description }}</textarea>
                                <p class="text-right">Description 1200/1200</p>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>Add Video</h6>
                                    <select name="result" class="form-control" id="sel3" onchange="showresult(this.value)">
                                        <option value="" disabled selected>--Select--</option>
                                        <option value="1">Youtube</option>
                                        <option value="2">Vimeo</option>
                                        <option value="3">My Computer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" id="ytlink">
                                    <h6>Add YouTube Video</h6>
                                    <input id="post_add_ytlink" name="post_add_ytlink" type="url" class="form-control"
                                        value="{{ $post->post_add_ytlink }}">
                                </div>
                                <div class="col-sm-6" id="vimeolink">
                                    <h6>Add Vimeo Video</h6>
                                    <input id="post_add_vimeolink" name="post_add_vimeolink" type="url" class="form-control"
                                        value="{{ $post->post_add_vimeolink }}">
                                </div>
                                <div class="col-sm-6" id="video">
                                    <h6>Upload Video</h6>
                                    <input id="post_add_video" name="post_add_video" type="file" class="form-control"
                                        value="{{ $post->post_add_video }}">
                                </div>
                            </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary mt-3" value="POST">
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
    </div>
    <div style="height: 50px;"></div>
</section>
@endsection
<script>
    function showresult(str) {
        if (str == "1") {
            $("#ytlink").css('display', 'block');
        } else {
            $("#ytlink").css('display', 'none');
        }
        if (str == "2") {
            $("#vimeolink").css('display', 'block');
        } else {
            $("#vimeolink").css('display', 'none');
        }
        if (str == "3") {
            $("#video").css('display', 'block');
        } else {
            $("#video").css('display', 'none');
        }
    }
</script>
@section('scripts')
<script>
    $(document).ready(function(){
        var vimeo =$('#post_add_vimeolink').val();
        if(vimeo== '' || vimeo == null){
            $('#vimeolink').hide();
        }
        var youtube =$('#post_add_ytlink').val();
        if(youtube== '' || youtube == null){
            $('#ytlink').hide();
        }
        var video =$('#post_add_video').val();
        if(video== '' || video == null){
            $('#video').hide();
        }

    })

</script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\PostManagement\CreatePostManageRequest', '#createpost') !!}
@endsection
