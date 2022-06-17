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
        <div class="specialty-topics">
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

                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>
                                        <div class=" col-lg-6">

                                            <div class="pull-left">
                                                <label class="post_right_box_heading">{{ $post->post_title }}</label>
                                                <h6 class="h6_post_label">
                                                    {!! $post->post_description !!}
                                                </h6>
                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="col-sm-12 text-center post_share_button d-flex justify-content-center like_section_parent">
                                        <div class="likeButtons">
                                            @foreach($post->likes as $like)
                                                @if(($like->post_id == $post->id) && ($like->ce == 1) && ($like->like == 1))
                                                    <?php $displayLike = true ?>
                                                    <i class="fa fa-thumbs-up like_icon" aria-hidden="true"></i>
                                                <a class="like" member_home_post_id="{{$post->id}}" member_home_user_id="{{$post->user->id}}" style="cursor: pointer;"><b style="color:#5c7c85;">Liked</b></a>
                                                @endif
                                            @endforeach
                                            @if($displayLike == false)
                                            <i class="fa fa-thumbs-up dislike_icon" aria-hidden="true"></i>
                                            <a class="dislike" member_home_post_id="{{$post->id}}" member_home_user_id="{{$post->user->id}}" style="cursor: pointer;">Like</a>
                                            @endif
                                            <?php $displayLike = false ?>
                                        </div>
                                        <a style="cursor: pointer;"><img src="{{ asset('frontend/img/comment-label.png') }}" alt="" /></a>
                                        <a style="cursor: pointer;"><img src="{{ asset('frontend/img/share_label.png') }}" alt="" /></a>

                                    </div>


                                </div>
                                @endforeach


                                {{--Following are without dynamic data -remove later --}}
                                <div class="post_center_box">
                                    <div class="row">
                                        <div class=" col-lg-6">
                                            <img src="{{ asset('frontend/img/img-1.png') }}" class="post_box_small_img"
                                                width="262" height="198" alt="" />
                                            <div class="pull-left box_center_small_label">
                                                <label>naveed55ow posted a new
                                                    Continuing Education item:</label>

                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>
                                        <div class=" col-lg-6">

                                            <div class="pull-left">
                                                <label class="post_right_box_heading">Test event post by fahad</label>
                                                <h6 class="h6_post_label">
                                                    test post by Fahad for Petowners.test post by Fahad for Petownerstest
                                                    post
                                                    by Fahad for Petownerstest post by Fahad for Petownerstest post by Fahad
                                                    for
                                                    Petownerstest post by Fahad for Petownerstest post by Fahad for
                                                    Petowners.
                                                </h6>
                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="col-sm-12 text-center post_share_button">
                                        <a id="" href="#"><img src="{{ asset('frontend/img/like-label.png') }}" width="56"
                                                height="21" alt="" /></a>
                                        <a id="" href="#"><img src="{{ asset('frontend/img/comment-label.png') }}"
                                                alt="" /></a>
                                        <a id="" href="#"><img src="{{ asset('frontend/img/share_label.png') }}" alt="" /></a>

                                    </div>

                                </div>
                                <div class="post_center_box">
                                    <div class="row">
                                        <div class=" col-lg-6">
                                            <img src="{{ asset('frontend/img/img-1.png') }}" class="post_box_small_img"
                                                width="262" height="198" alt="" />
                                            <div class="pull-left box_center_small_label">
                                                <label>naveed55ow posted a new
                                                    Continuing Education item:</label>

                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>
                                        <div class=" col-lg-6">

                                            <div class="pull-left">
                                                <label class="post_right_box_heading">Test event post by fahad</label>
                                                <h6 class="h6_post_label">
                                                    test post by Fahad for Petowners.test post by Fahad for Petownerstest
                                                    post
                                                    by Fahad for Petownerstest post by Fahad for Petownerstest post by Fahad
                                                    for
                                                    Petownerstest post by Fahad for Petownerstest post by Fahad for
                                                    Petowners.
                                                </h6>
                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="col-sm-12 text-center post_share_button">
                                        <a href="#"><img src="{{ asset('frontend/img/like-label.png') }}" width="56"
                                                height="21" alt="" /></a>
                                        <a href="#"><img src="{{ asset('frontend/img/comment-label.png') }}"
                                                alt="" /></a>
                                        <a href="#"><img src="{{ asset('frontend/img/share_label.png') }}" alt="" /></a>



                                    </div>


                                </div>
                                <div class="post_center_box">
                                    <div class="row">
                                        <div class=" col-lg-6">
                                            <img src="{{ asset('frontend/img/img-1.png') }}" class="post_box_small_img"
                                                width="262" height="198" alt="" />
                                            <div class="pull-left box_center_small_label">
                                                <label>naveed55ow posted a new
                                                    Continuing Education item:</label>

                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>
                                        <div class=" col-lg-6">

                                            <div class="pull-left">
                                                <label class="post_right_box_heading">Test event post by fahad</label>
                                                <h6 class="h6_post_label">
                                                    test post by Fahad for Petowners.test post by Fahad for Petownerstest
                                                    post
                                                    by Fahad for Petownerstest post by Fahad for Petownerstest post by Fahad
                                                    for
                                                    Petownerstest post by Fahad for Petownerstest post by Fahad for
                                                    Petowners.
                                                </h6>
                                                <p>March 3, 2021</p>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="col-sm-12 text-center post_share_button">
                                        <a style="cursor: pointer;" id="member_home_like"><img src="{{ asset('frontend/img/like-label.png') }}" width="56"
                                                height="21" alt="" /></a>
                                        <a style="cursor: pointer;" id="member_home_comment"><img src="{{ asset('frontend/img/comment-label.png') }}"
                                                alt="" /></a>
                                        <a style="cursor: pointer;" id="member_home_share"><img src="{{ asset('frontend/img/share_label.png') }}" alt="" /></a>



                                    </div>


                                </div>




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

            $('.likeButtons a').on("click", function() {
                likepostid = $(this).attr('member_home_post_id');
                postUserid = $(this).attr('member_home_user_id');
                likePost($(this));
            });

        function likePost(component){
                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "POST",
                url: '/savelike',
                data: {likepostid: likepostid, postUserid: postUserid, ce:1},
                success: function(response){
                    if(response.code == 200){
                        component.css('color','#5c7c85');
                        component.html("<b>Liked</b>");
                        toastr.success('Post Liked Successfully!');

                    }
                    else if(response.code == 201){
                        component.css('color','#f27222');
                        component.html('Like');
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
