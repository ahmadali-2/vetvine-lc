@extends('frontend.master')
@section('content')
<body>
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="video-detail-inner">
                <div class="video-title-he d-flex flex-wrap justify-content-between ">
                    <h2>{{ $videos->video_title }}</h2>
                    {{-- <div class="" > --}}
                        <a href="#" class="vd-more-inf mt-0">More Info</a>
                    {{-- </div> --}}
                </div>
                <div class="detail-video-ratting">
                    <div class="vd-rating" >
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                        <span class="fas fa-star" aria-hidden="true"></span>
                    </div>
                    {{-- <div class="detail-video-time">
                        <span>10 mins</span>
                        <p>02/17/22</p>
                    </div> --}}
                </div>
                <div class="detail-vedio">
                    <iframe src="{{ $videos->video_link }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
                <div class="video-detail-para border-0">
                    <p>
                        {{ $videos->video_description }}
                    </p>
                </div>
            </div>
            <section class="video-section-wrapper border-top-0 mb-4">
                <div class="container">
                    <div class="row w-100 m-0">
                        <div class="col-12">
                            <h1 class="Upcoming-webinars">You might also like</h1>
                        </div>
                        @forelse ($more_info as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="{{ $item->video_link }}" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>
                                        {{ $item->video_title }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse

                    </div>
                </div>
            </section>
        </div>
    </section>
    @endsection
