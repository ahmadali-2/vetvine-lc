@extends('frontend.master')
@section('content')
<body>

    <section class="video-section-wrapper mb-4">
        <div class="container">
            <div class="video-detail-inner">
                <div class="video-title-he d-flex flex-wrap justify-content-between ">
                    <h2>Common and uncommon diseases</h2>
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
                    <div class="detail-video-time">
                        <span>10 mins</span>
                        <p>02/17/22</p>
                    </div>
                </div>
                <div class="detail-vedio">
                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>

                <div class="video-detail-para border-0">
                    <p>This is the second of a 4-part series on feeding the horse, presented by internationally
                        recognized and leading equine nutrition consultant Dr. Steve Jackson.
                    </p>
                    <p>
                        This segment will focus on the relationship between mare nutrition, fetal development, and
                        postpartum growth including the feeding and nutrition of weanlings and yearlings. Discussion
                        will include:
                    </p>
                    <p>- Nutrition of the pregnant mare and the impact on fetal development <br />
                        - Milk production in mares and "creep feed or no creep feed" <br />
                        - Transition of foals from on their mares to weanlings and then to yearlings <br />
                        - Pitfalls that may be encountered along the way that may involve or be caused by nutrition
                        <br />
                        - Feeding horses for sale or show
                    </p>

                </div>
            </div>
            <section class="video-section-wrapper border-top-0 mb-4">
                <div class="container">

                    <div class="row w-100 m-0">
                        <div class="col-12">
                            <h1 class="Upcoming-webinars">You might also like</h1>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/USrRlnBFoSw" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/6265Qk-W-xI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/gXWiDNhvIpM" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/USrRlnBFoSw" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="https://www.youtube.com/embed/6265Qk-W-xI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <h3>Feeding Mares and
                                        Young Horses
                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
    @endsection
