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
                    <img src="{{ asset('frontend/forums/img/sep-line-2.jpg') }}" width="250"
                        height="2" alt="" class="line_image">
                    <p class="mb-0">A BETTER LIFE FOR ANIMALS AND THE HUMANS
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
            <span>Forums
            </span>
        </h2>
    </div>
</section>

<section>
    <div class="specialty-topics">
        <div class="container">
            <div class="specialty-info">
                <div class="search-feild float-right">
                    <input type="search" required>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                @foreach ($categories as $category)
                <div class="specialty-detail">
                    <h2>{{$category->category_title}}</h2>
                </div>
                @foreach ($category->forums as $forum)
                <div class="topics-section">
                    <div class="behavior-card col-lg-6">
                        <div class="behavior-img"><img
                                src="{{ asset('frontend/forums/img/forum-pic-1.png') }}"
                                alt="behavior img"></div>
                        <div class="behavior-details ">
                            <div class="behavior-title">
                                <a href="{{ route('forumpostlist',$forum->id) }}"><h2>{{$forum->forum_title}}</h2></a>
                            </div>
                            <div class="behavior-description">
                                <div class="file">
                                    <img src="{{ asset('frontend/forums/img/forum-file-icon.png') }}"
                                        alt="">
                                    <p>105</p>
                                </div>
                                <div class="latter-box">
                                    <img src="{{ asset('frontend/forums/img/later-box-icon.png') }}"
                                        alt="">
                                    <p>202</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="behavior-card-right col-lg-6">
                        <div class="behavior-img-2"><img
                                src="{{ asset('frontend/forums/img/forum-pic-2.png') }}"
                                alt="behavior img"></div>
                        <div class="behavior-details-right ">
                            <p class="behavior-card-description">Last reply by VetVine CE in Child-Dog Safety Resources
                            </p>
                            <p class="date">March 3, 2021</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
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
<section>
    <div class="container">
        <div class="advertising-sec">
            @if (isset($ads[0]->banner_image_url))
            <a href="{{ $ads[0]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[0]->ad_media) }}" alt=""></div>
            </a>
            @else

            @endif
            @if(isset($ads[1]->banner_image_url))
            <a href="{{ $ads[1]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[1]->ad_media) }}" alt=""></div>
            </a>
            @else

            @endif
            @if(isset($ads[2]->banner_image_url))
            <a href="{{ $ads[2]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[2]->ad_media) }}" alt=""></div>
            </a>

            @else

            @endif
        </div>
    </div>
</section>
@endsection
