@extends('frontend.master')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
@endsection
@section('content')
    <style>
        .video-section-wrapper {
            width: 100%;
            display: inline-block;
            border-top: 1px solid #fff !important;
            /* padding-top: 23px; */
        }
    </style>


    <section class="news_banner" style="background-image: url('{{ asset('frontend/images/news_banner.png') }}');">
        <div class="container">
            <div class="flex-box-banner">
                <div class="grow_banner_box grow_banner_box_web">
                    <div class="grow-heading mt-lg-3">NEWS Detail</div>
                    <img src="http://127.0.0.1:8000/frontend/images/sep-line-2.jpg" width="250" height="2"
                        alt="" class="line_image">


                </div>
            </div>
        </div>
    </section>
    <section class="main_banner_bottob_label"></section>



    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="public-detail-inner">
                <h2>{{ $newsdetail->news_title }}</h2>
                <p>{!! $newsdetail->news_description !!}</p>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="advertising-sec">
                <div class="advertising-img-1"><img src="{{ asset('frontend/forums/img/add-1.png') }}" alt=""></div>
                <div class="advertising-img-2"><img src="{{ asset('frontend/forums/img/add-2.png') }}" alt=""></div>
                <div class="advertising-img-3"><img src="{{ asset('frontend/forums/img/add-3.png') }}" alt=""></div>
            </div>
        </div>
    </section>
@endsection
