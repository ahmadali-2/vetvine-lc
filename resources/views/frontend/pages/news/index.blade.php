@extends('frontend.master')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
@endsection
@section('content')
    <section class="news_banner">
        <div class="container">
            <div class="flex-box-banner">
                <div class="grow_banner_box grow_banner_box_web">
                    <div class="grow-heading mt-lg-3">NEWS SOURCE</div>
                    <img src="http://127.0.0.1:8000/frontend/images/sep-line-2.jpg" width="250" height="2"
                        alt="" class="line_image">


                </div>
            </div>
        </div>
    </section>
    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>News Source
                </span>
            </h2>
        </div>
    </section>

    <section>

        <div class="container forum_top_section mb-5">
            <div class="row align-items-center">

                <div class="col-md-3 index_forum_search">
                    <label for="">Search</label>
                    <div class="input-group">



                        <input id="search_field" name="search_field" type="text" class="form-control top-search"
                            placeholder="Search News" aria-label="Recipient's username" aria-describedby="basic-addon2">

                        <div class="input-group-append">

                            <button class="btn search_btn" type="button"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>

                        </div>

                    </div>
                </div>



            </div>
        </div>



        <div class="container news">
            <div class="row">
                <div id="news_search">
                    @include('frontend.pages.news.filternews')
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
                                <a target="blank" href="{{$new->news_link}}"><h2>{{$new->news_title}}</h2></a>
                            </div>
                            <div class="behavior-description">
                                <p>{!! $new->news_description !!}</p>
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

@section('scripts')
    <script>
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            localStorage.setItem('news-page', page);
            fetch_news(page);
        });
        function fetch_news(page) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "GET",
                url: '/news?page=' + page,
                success: function(data) {
                   $("#news_search").html(data.html);

                }
            });
        }

        $('#search_field').on('keyup', function() {
            filterFormCategory();
        });

        function filterFormCategory() {
            var search_field = $('#search_field').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: "POST",
                url: '/search-news',
                data: {

                    search_field: search_field
                },
                success: function(data) {
                    $('#news_data_search').empty();
                    $('#news_data_search').append(data.html);
                }
            });
        }
    </script>
@endsection
