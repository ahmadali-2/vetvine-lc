@php
    $padding = 10;
@endphp
@foreach($comments as $key=>$comment)

@php
     $padding + 40;
@endphp
<div class="display-comment" style="padding-left: {{$padding}}px;">
    @if($comment->ce == $ce)
        <strong>{{ $comment->user->name }}</strong>
        <p class="m-3" id="deleteComment_{{$comment->id}}" data-key="{{$comment->id}}">{{ $comment->comment }}
            <a href="javascript:void(0);" data-comment-id="{{$comment->id}}">
                <i class="fa fa-trash text-danger ml-2" aria-hidden="true"></i></a>
        </p>
        <a href="" id="reply"></a>
        <form id="replyfrm_{{$comment->id}}">
            <div class="form-group">
                <input type="text" name="reply" id="reply" class="form-control" style="border: 1px solid #ced4da !important;"/>
                <span class="asteric" id ="error2"></span>
                <input type="hidden" id="reply_post_id" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" data-key="{{$comment->id}}">Reply</button>
            </div>
        </form>
        <div id="comment_replies">
            @include('frontend.pages.forums.replies', ['comments' => $comment->replies])
        </div>
    @endif
</div>
@endforeach