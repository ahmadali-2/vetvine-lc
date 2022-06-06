@extends('frontend.master')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
@endsection
@section('content')
    <main>
        <section class="main_banner  forum_bg">
            <div class="container">
                <div class="flex-box-banner">
                    <div class="grow_banner_box grow_banner_box_web">
                        <div class="grow-heading">Forum</div>
                        <img src="{{ asset('frontend/forums/img/sep-line-2.jpg') }}" width="250" height="2" alt=""
                            class="line_image">
                        <p class="mb-0">A BETTER LIFE FOR ANIMALS AND THE HUMANS
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- ============================================================================ --}}
    {{-- NEW FORUMS SECTION --}}
    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>Forums
                </span>
            </h2>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="forum-chat mt-5">
                <div class="chat-box-a col-lg-12 pl-0 pr-0 d-flex">
                    <div class="user-pro-detail col-lg-8 col-md-10 col-sm-12">
                        <div class="user-pro ">
                            <div class="left-pro d-flex">
                                <div class="comment_forum  pr-1"><img src="img/user.png" alt=""></div>
                                <p class="mb-0 pl-2 pr-2">Admin</p>
                                <div class="comment_forum pl-1 "><img src="img/crown.png" alt=""></div>
                            </div>
                            <div class="date-icon d-flex align-items-center">
                                <div class="comment_forum"><span>Nov 22, 2021</span></div>
                                <div class="comment_forum pl-1 "><img src="img/dots.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="chat-details">
                            <div class="chat-title">
                                <h3>Sleep Problems</h3>
                                <h6>in Mental Health</h6>
                            </div>
                            <div class="chat-description">
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                                    ratione ab quaerat officia perferendis temporibus quos expedita voluptatem laudantium?
                                    Earum ducimus consequuntur nostrum ipsum dolore est alias, quae soluta eligendi.
                                    6Lel4Z4U oribus quos expedita voluptatem laudantium? Earum ducimus consequuntur nostrum
                                    ipsum dolore est alias, quae </p>
                            </div>
                            <div class="chat-like-comments">
                                <div class="icons-like">
                                    <div class="comments-icon">
                                        <img src="img/like.png" alt="">
                                        <img src="img/heart2.png" class="heart1" alt="">
                                        <img src="img/heart1.png" class="heart1" alt="">

                                    </div>
                                    <div class="like-name">
                                        <p class="mb-0">jubli marld, Jut and 41 others</p>
                                    </div>
                                </div>
                                <div class="icon-btn">
                                    <div class="like-btn d-flex align-items-center">
                                        <img src="img/thumb-up.png" alt="">
                                        <p class="mb-0 pl-2">Like</p>
                                    </div>
                                    <div class="like-btn d-flex align-items-center">
                                        <img src="img/chat-box.png" alt="">
                                        <p class="mb-0 pl-2">Comment</p>
                                    </div>
                                    <div class="like-btn d-flex align-items-center">
                                        <img src="img/curve-arrow.png" alt="">
                                        <p class="">Share</p>
                                    </div>
                                </div>

                            </div>
                            <div class="chat-textarea">
                                <div class="cht-pro">
                                    <div class="comment_forum  pr-1"><img src="img/user.png" alt=""></div>
                                </div>
                                <textarea name="" id="" cols="30" rows="5" placeholder="write a comments ...."></textarea>

                            </div>
                            <div class="text-detail">
                                <div class="emajo"><img src="img/smile.png" alt="">
                                    <p>Gif</p>
                                </div>


                            </div>
                            <div class="text-btn">
                                <div class="btn-cancel"><a href="#">Cancel</a></div>
                                <div class="btn-cancel2"><a href="#">Submit</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="chat-side col-lg-4 col-md-2  pl-0 pr-0">
                        <div class="chat-side-detail">
                            <div class="comment_forum  d-flex align-items-center"><img src="img/view.png" alt="">
                                <div class="chat-veiw">16 views</div>
                            </div>
                            <div class="comment_forum  d-flex align-items-center"><img src="img/message.png" alt="">
                                <div class="chat-veiw">0 comments</div>
                            </div>
                            <div class="similar">
                                <h4>Similars Post</h4>
                                <p>Ear Problem</p>
                                <p>Ear Problem</p>
                                <p>Ear Problem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



@endsection
