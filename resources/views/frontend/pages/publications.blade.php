@extends('frontend.master')
@section('content')
<section class="video-section-wrapper mb-4">
    <div class="container">
        <h1 class="Upcoming-webinars mt-2">Find an Upcoming Event</h1>
        <form action="{{ route('search_educations') }}"  method="GET">
            @csrf
            <ul class="filter_list">
                <li class="top-three-input">
                    <label>Title / Keyword</label>
                    <input type="text" class=" form-control" name="name">
                </li>
                <li>
                    <div id="fav_show_wrapper mt-0">
                        <label for="fav_Show" id="fav_show_label">Category:</label>
                        <select id="category" name="category"
                        class="form-control filter-slect" value="" data-val="true">
                        <option title="" value="" label=""></option>
                        @foreach ($category as $search)
                            <option value="{{ $search->id }}">{{ $search->category_title }}
                            </option>
                        @endforeach
                    </select>
                    </div>
                </li>
                <li class="top-three-input">
                    <label> Presenter </label>
                    <input type="text" class=" form-control" name="presenter">
                </li>
                <li>
                    <label>Sponsor</label>
                    <input type="text" class=" form-control" name="sponser">
                </li>
                <li>
                    <label>From</label>
                    <input type="date" class=" form-control" name="from">
                </li>
                <li>
                    <label>To</label>
                    <input type="date" class=" form-control" name="to">
                </li>
                <li>
                    <button class="btn filter-searchBtn" type="submit" value="search">Search</button>
                </li>
            </ul>
        </form>
        <ul class="page-link-list">
            <li class="active">
                <a href="{{ route('upcoming_webinars') }}">Continuing Education</a>
            </li>
            <li>
                <a href="{{ route('upcoming_publications') }}">Publications</a>
            </li>
            <li>
                <a href="#">My Past Events</a>
            </li>
            <li>
                <a href="#">My Upcoming Events</a>
            </li>
        </ul>
        <div class="row w-100 video-cat-main m-0">
            @foreach ($publication as $publications)
            <div class="col-md-6 col-lg-4 publication_col">
                <div class="video-box-main">
                    <div class="video-box">
                        <img src="{{ asset('/admin/eventss/' . $publications->main_photo) }} " class="img-fluid" id="user-image" height="100px" alt="">
                    </div>
                    <div class="publication-bottom-text">
                        <h3>{{ $publications->events->category_title }}</h3>
                        <h4>{{ $publications->event_title }}</h4>
                        <div>
                        </div>
                    </div>
                    <div class="publication-bottom-description">

                        <p class="para-decription">
                            {{ $publications->event_description }}
                        </p>
                        <a href="#" class="p_btn">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- pagination start -->


            <div class="col-md-12 pagination_col">
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

            <!-- pagination end -->
        </div>

        <!-- end row column section  -->
    </div>
</section>
@endsection



