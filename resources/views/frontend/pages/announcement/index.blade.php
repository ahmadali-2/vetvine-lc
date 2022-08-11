@extends('frontend.master')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
@endsection
@section('content')


<section class="news_banner anouce_banner">
    <div class="container">
        <div class="flex-box-banner">
            <div class="grow_banner_box grow_banner_box_web">
                <div class="grow-heading mt-lg-3">ANNAOUCEMENT</div>
                <img src="http://127.0.0.1:8000/frontend/images/sep-line-2.jpg" width="250" height="2" alt="" class="line_image">


            </div>
        </div>
    </div>
</section>
<section class="main_banner_bottob_label"></section>

<section class="become_member_area">
    <div class="container">
        <h2>
            <span>ANNAOUCEMENT
            </span>
        </h2>
    </div>
</section>

<section>


   <div class="container news">
    <div class="row">
        <div class="col-md-12 mb-3">

            <div class="date">
                <ul>
                    <li><i class="fa fa-circle" aria-hidden="true"></i>
                         Augast 8, 2022</li>
                </ul>
            </div>

            <div class="content">
                <div class="heading d-flex align-items-center">
                    <img src="{{asset('frontend/images/arrow.png')}}" alt="" width="16" height="18">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>

                </div>

                <p class="ml-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel iusto hic eius atque ad quaerat veritatis quia facilis nostrum saepe voluptates delectus labore accusantium, soluta totam odit necessitatibus corporis et!   <a href="{{url('frontend-news-detail')}}" class="read_more">Read More</a>  </p>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="content">
                <div class="heading d-flex align-items-center">
                    <img src="{{asset('frontend/images/arrow.png')}}" alt="" width="16" height="18">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>

                </div>

                <p class="ml-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel iusto hic eius atque ad quaerat veritatis quia facilis nostrum saepe voluptates delectus labore accusantium, soluta totam odit necessitatibus corporis et!   <a href="{{url('frontend-news-detail')}}" class="read_more">Read More</a>  </p>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="content">
                <div class="heading d-flex align-items-center">
                    <img src="{{asset('frontend/images/arrow.png')}}" alt="" width="16" height="18">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>

                </div>

                <p class="ml-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel iusto hic eius atque ad quaerat veritatis quia facilis nostrum saepe voluptates delectus labore accusantium, soluta totam odit necessitatibus corporis et!   <a href="{{url('frontend-news-detail')}}" class="read_more">Read More</a>  </p>
            </div>
        </div>



        <div class="col-md-12 pagination_col my-5">
            <ul class="pagination pagination-lg">
               <li class="page-item"><a class="page-link" href="#">Previous</a></li>
               <li class="page-item"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link " href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item active"><a class="page-link" href="#">4</a></li>
               <li class="page-item"><a class="page-link" href="#">5</a></li>
               <li class="page-item"><a class="page-link" href="#">6</a></li>
               <li class="page-item"><a class="page-link" href="#">7</a></li>
               <li class="page-item"><a class="page-link" href="#">Next</a></li>
             </ul>
          </div>
    </div>
   </div>



    {{-- <div class="specialty-topics">
        <div class="container">
            <div class="specialty-info">
                <div class="search-feild float-right">
                    <input type="search" required>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                @foreach ($news as $new)
                <div class="topics-section">
                    <div class="behavior-card col-lg-6">
                        <div class="behavior-img"><img
                                src="{{ asset('frontend/forums/img/forum-pic-1.png') }}"
                                alt="behavior img"></div>
                        <div class="behavior-details ">
                            <div class="behavior-title">
                                <a href="{{$new->news_link}}"><h2>{{$new->news_title}}</h2></a>
                            </div>
                            <div class="behavior-description">
                                <p>{{$new->news_description}}</p>
                            </div>
                            <div class="behavior-description">
                                <div class="file">
                                    <img src="{{ asset('frontend/forums/img/forum-file-icon.png') }}"
                                        alt="">
                                    <p>105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="behavior-card-right col-lg-6">
                        <div class="behavior-details-right ">
                            <p class="behavior-card-description">Published
                            </p>
                            <p class="date">March 3, 2021</p>
                        </div>
                    </div>
                </div>
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

    </div> --}}

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
