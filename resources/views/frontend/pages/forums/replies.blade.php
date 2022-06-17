@php
    $padding = 10;
@endphp

@foreach($comments as $comment)

@php
     $padding + 40;
@endphp
<div class="display-comment" style="padding-left: {{$padding}}px;">
    <strong>{{ $comment->user->name }}</strong>
    <p class="m-3">{{ $comment->comment }}
        <a href="javascript:void(0);"  onclick="deleteRecord('{{$comment->id}}', '/vetvine-member/comment-destroy/')">
            <i class="fa fa-trash text-danger ml-2" aria-hidden="true"></i></a>
    </p>
    <a href="" id="reply"></a>
    <form method="post" id="replyfrm" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="reply" id="reply" class="form-control" style="border: 1px solid #ced4da !important;"/>
            <span class="asteric" id ="error2"></span>
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="reply_btn">Reply</button>
            {{-- <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" /> --}}
        </div>
    </form>
    @include('frontend.pages.forums.replies', ['comments' => $comment->replies])
</div>
@endforeach
