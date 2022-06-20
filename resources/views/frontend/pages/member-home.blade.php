{{-- @extends('frontend.master')
@section('content') --}}
@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
<?php
    $displayLike = false;
?>
    <!-- member home start -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/member-home-new-css.css') }}" /> --}}
    <section class="main_banner post_bg">
        <div class="container">
            <div class="flex-box-banner">
                <div class="grow_banner_box grow_banner_box_web">
                    <div class="grow-heading">MEMBERS</div>
                    <img src="{{ asset('frontend/img/sep-line-2.jpg') }}" width="250" height="2" alt=""
                        class="line_image">
                    <p class="mb-0">A BETTER LIFE FOR ANIMALS
                        AND THE HUMANS
                    </p>

                </div>
            </div>
        </div>
    </section>
    </main>
    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>What's Buzzing
                </span>
            </h2>
        </div>
    </section>

    <section>
        <div class="specialty-topics margin_bottom_special">
            <div class="container">
                <div class="specialty-info">
                    <div class="specialty-detail">

                        <div class="search-feild float-left">
                            <input type="search" required>
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class=" col-lg-3 col-md-3 text-center">
                            <div class="img_post_left"><img src="@if(Auth()->user()->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/'.Auth()->user()->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" width="262"
                                    height="198" alt="" />
                                <label>{{ Auth::user()->name }}</label>
                            </div>
                            <img src="{{ asset('frontend/img/add-img.png') }}" width="100%" class="add_left_post"
                                alt="" />



                        </div>
                        <div class="col-lg-6 col-md-6">

                        @foreach($shares as $key=>$share)
                                <input id="member_home_post_id_{{$key}}" type="number" value="{{$share->post_id}}" hidden>
                                <input id="member_home_user_id_{{$key}}" type="number" value="{{$share->user_id}}" hidden>
                                <div class="post_center_box">
                                    <div class="row">
                                        <div class=" col-lg-6">
                                            <img src="@if ($post->user->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/' . $post->user->profile_photo) }} @else {{ asset('frontend/images/thumbnail.jfif') }} @endif"
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

                                    <div class="col-sm-12 d-flex justify-content-center post_share_button">
                                        <div class="shareLikeButtons">
                                            @foreach($share->likes as $like)
                                                @if(($like->share_id == $share->id) && ($like->ce == 1) && ($like->like == 1))
                                                    <?php $displayLike = true ?>
                                                <a class="dislike" member_home_post_id="{{$share->id}}" member_home_user_id="{{$share->user_id}}" member_home_like_type="0" style="cursor: pointer;"><b style="color: #4886C8;">Liked</b></a>
                                                @endif
                                            @endforeach
                                            @if($displayLike == false)
                                            <a class="dislike" member_home_post_id="{{$share->id}}" member_home_user_id="{{$share->user_id}}" member_home_like_type="0" style="cursor: pointer;" style="color: black;">Like</a>
                                            @endif
                                            <?php $displayLike = false ?>
                                        </div>
                                        <a style="cursor: pointer;"><img src="{{ asset('frontend/img/comment-label.png') }}" alt="" /></a>

                                        <div class="shareButtons">
                                            <a style="cursor: pointer;" data-user-id="{{$share->user_id}}" data-post-id="{{$share->post_id}}">Share</a>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            @foreach ($posts as $key=>$post)
                                <input id="member_home_post_id_{{$key}}" type="number" value="{{$post->id}}" hidden>
                                <input id="member_home_user_id_{{$key}}" type="number" value="{{$post->user->id}}" hidden>
                                <div class="post_center_box">
                                    <div class="row">
                                        <div class=" col-lg-6">
                                            <img src="@if ($post->user->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/' . $post->user->profile_photo) }} @else {{ asset('frontend/images/thumbnail.jfif') }} @endif"
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
                                                @if(($like->post_id == $post->id) && ($like->ce == 1) && ($like->like == 1))
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
                                @endforeach
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <img src="{{ asset('frontend/img/add-img.png') }}" width="100%" alt="" />
                        </div>
                    </div>

                    <div class="page-num col-lg-7">
                        <ul>
                            <li><a href="#">previous</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>

    </section>

    <!-- member home end -->
@endsection
@section('scripts')
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
                        component.html("<b>  <i class='fa fa-thumbs-up' aria-hidden='true'></i> Liked</b>");
                        toastr.success('Post Liked Successfully!');

                    }
                    else if(response.code == 201){
                        component.css('color','#f27222');
                        component.html( '<i class="fa fa-thumbs-up" aria-hidden="true"></i> Like');
                        toastr.success('Post unliked Successfully!');
                    }
                    else if(response.code == 400){
                        component.css('color','#f27222');
                        component.html('Like');
                        toastr.success('Please verify email first!');
                    }
                }
                });
            }
        // $(document).ready(function(e) {
        //     $(".like").on("click", function(e) {
        //         e.preventDefault();
        //         var postid = $(this).attr('data-post-id');
        //         var userid = $(this).attr('data-user-id');
        //         var postUserid = $(this).attr('data-post-user-id');
        //         // console.log(postUserid);
        //         var id = $(this).attr('id');
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         $.ajax({
        //             url: "{{ route('likesave') }}",
        //             method: 'POST',
        //             data: {
        //                 likeuserid: userid,
        //                 likepostid: postid,
        //                 postUserid: postUserid
        //             },
        //             success: function(response) {
        //                 // console.log(response.like.like);
        //                 if (response.like.like == 1) {
        //                     $("#" + id).html('Liked');
        //                 } else if (response.like.like == 0) {
        //                     $("#" + id).html('Like');
        //                 }
        //             },
        //             error: function(error) {
        //                 console.log(error)
        //             }
        //         });
        //     })
        // })

        // $(document).ready(function(){
        //    $(document).on("click",".dislike",function(){

        //  let a = $(this).closest('.row').find('.dislike_icon').css("color","#5c7c85");

        //  console.log(a);
        //    })

        // })
    </script>
@endsection
