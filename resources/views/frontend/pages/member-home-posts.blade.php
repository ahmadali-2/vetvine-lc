<style>
    .pagination {justify-content: center;}
</style>
<?php
    $displayLike = false;
?>
@forelse($posts as $key=>$post)
    @if($post->getTable() == "shares")
        <?php $share = $post ?>
        <input id="member_home_post_id_{{$key}}" type="number" value="{{$share->post_id}}" hidden>
        <input id="member_home_user_id_{{$key}}" type="number" value="{{$share->user_id}}" hidden>
        <div class="post_center_box">
            <div class="row">
                <div class=" col-lg-6">
                    <img src="@if ($post->users[0]->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/' . $post->users[0]->profile_photo) }} @else {{ asset('frontend/images/user.png') }} @endif"
                        class="post_box_small_img" width="262" height="198" alt="" />
                    <div class="pull-left box_center_small_label">
                        @foreach($share->users as $user)
                            @if($user->id == $share->user_id)
                                @if($share->ce == 1)
                                    <label>{{ $user->name }} shared a new
                                    Continuing Education item:</label>
                                @else
                                    <label>{{ $user->name }} shared forum
                                    Continuing Education item:</label>
                                @endif
                            @endif
                        @endforeach
                        <p>{{$share->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                <div class=" col-lg-6">
                @foreach($share->posts as $post)
                    @if($post->id == $share->post_id)
                    <div class="pull-left">
                        <label class="post_right_box_heading">{{ $post->post_title }}</label>
                        <h6 class="h6_post_label">
                            {!! $post->post_description !!}
                        </h6>
                        <p>Shared on : {{date("d-m-Y", strtotime($share->created_at))}}</p>
                    </div>
                    @endif
                @endforeach

                </div>
            </div>

            <div class="col-sm-12 text-center post_share_button">
                <div class="shareLikeButtons">
                    @foreach($share->likes as $like)
                        @if(($like->share_id == $share->id) && ($like->ce == 1) && ($like->like == 1) && ($like->user_id == auth()->user()->id))
                            <?php $displayLike = true ?>
                        <a member_home_post_id="{{$share->id}}" member_home_user_id="{{$share->user_id}}" member_home_like_type="0" style="cursor: pointer;"><b style="color: #4886C8;">Liked</b></a>
                        @endif
                    @endforeach
                    @if($displayLike == false)
                    <a member_home_post_id="{{$share->id}}" member_home_user_id="{{$share->user_id}}" member_home_like_type="0" style="cursor: pointer;" style="color: black;">Like</a>
                    @endif
                    <?php $displayLike = false ?>
                </div>
                <a style="cursor: pointer;"><img src="{{ asset('frontend/img/comment-label.png') }}" alt="" /></a>

                <div class="shareButtons">
                    <a style="cursor: pointer;" data-user-id="{{$share->user_id}}" data-post-id="{{$share->post_id}}">Share</a>
                </div>
            </div>
        </div>
    @else
        <input id="member_home_post_id_{{$key}}" type="number" value="{{$post->id}}" hidden>
        <input id="member_home_user_id_{{$key}}" type="number" value="{{$post->user->id}}" hidden>
        <div class="post_center_box">
            <div class="row">
                <div class=" col-lg-6">
                    <img src="@if ($post->user->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/' . $post->user->profile_photo) }} @else {{ asset('frontend/images/user.png') }} @endif"
                        class="post_box_small_img" width="262" height="198" alt="" />
                    <div class="pull-left box_center_small_label">
                        <label>{{ $post->user->name }} posted a new
                            Continuing Education item:</label>

                        <p>{{$post->created_at->diffForHumans()}}</p>
                    </div>



                </div>
                <div class=" col-lg-6">

                    <div class="pull-left">
                        <label class="post_right_box_heading">{{ $post->post_title }}</label>
                        <h6 class="h6_post_label">
                            {!! $post->post_description !!}
                        </h6>
                        <p>Posted on : {{date("d-m-Y", strtotime($post->created_at))}}</p>
                    </div>



                </div>


            </div>

            <div class="col-sm-12 text-center post_share_button d-flex justify-content-center like_section_parent">
                <div class="likeButtons">
                    @foreach($post->likes as $like)
                        @if(($like->post_id == $post->id) && ($like->ce == 1) && ($like->like == 1)  && ($like->user_id == auth()->user()->id))
                            <?php $displayLike = true ?>
                        <a class="like" member_home_post_id="{{$post->id}}" member_home_user_id="{{$post->user->id}}" member_home_like_type="1" style="cursor: pointer;"><b style="color: #4886C8;"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</b></a>
                        @endif
                    @endforeach
                    @if($displayLike == false)
                    <a class="dislike" member_home_post_id="{{$post->id}}" member_home_user_id="{{$post->user->id}}" member_home_like_type="1" style="cursor: pointer;" style="color: black;"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a>
                    @endif
                    <?php $displayLike = false ?>
                </div>
                <a style="cursor: pointer;"><img src="{{ asset('frontend/img/comment-label.png') }}" alt="" /></a>

                <div class="shareButtons">
                    <a style="cursor: pointer;" data-user-id="{{$post->user->id}}" data-post-id="{{$post->id}}">Share</a>
                </div>

            </div>


        </div>
    @endif
    @empty
    <img src="{{ url('frontend/images/no-result.gif') }}" style="width: 100%;"/>
@endforelse
<div class="pagination_div">
    {{ $postActivities->links() }}
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            var likepostid;
            var postUserid;
            var sharePostId;
            var shareUserId
            var likeType;

            $('.likeButtons a').on("click", function() {
                likepostid = $(this).attr('member_home_post_id');
                postUserid = $(this).attr('member_home_user_id');
                likeType = $(this).attr('member_home_like_type');
                likePost($(this));
            });

            $('.shareLikeButtons a').on("click", function() {
                likepostid = $(this).attr('member_home_post_id');
                postUserid = $(this).attr('member_home_user_id');
                likeType = $(this).attr('member_home_like_type');
                likePost($(this));
            });

            $('.shareButtons a').on("click", function() {
                sharePostId = $(this).attr('data-post-id');
                sharePost();
            });

        function sharePost(){
            console.log(sharePostId, shareUserId);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "POST",
                url: '/share-post',
                data: {sharePostId: sharePostId, ce:1},
                success: function(response){
                    if(response.code == 200){
                        window.location.reload();
                        toastr.success('Post shared Successfully!');
                    }
                    else if(response.code == 400){
                        toastr.error('Please login to continue!');
                    }
                    else if(response.code == 401){
                        toastr.error('Please verify email first!');
                    }
                }
                });
        }
        function likePost(component){
                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "POST",
                url: '/savelike',
                data: {likepostid: likepostid, postUserid: postUserid, likeType: likeType, ce:1},
                success: function(response){
                    if(response.code == 200){
                        component.css('color','#5c7c85');
                        component.html("<b>Liked</b>");
                    }
                    else if(response.code == 201){
                        component.css('color','#f27222');
                        component.html('Like');
                    }
                    else if(response.code == 400){
                        component.css('color','#f27222');
                        component.html('Like');
                    }
                }
                });
            }
    </script>
