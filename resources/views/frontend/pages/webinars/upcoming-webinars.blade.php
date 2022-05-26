@extends('frontend.master')
@section('content')
    <section class="video-section-wrapper mb-4">
        <div class="container">
            <h1 class="Upcoming-webinars mt-2">Find an Upcoming Event</h1>
            <form action="{{ route('search_educations') }}" method="post">
                @csrf
                <ul class="filter_list">
                    <li class="top-three-input">
                        <label>Title / Keyword</label>
                        <input type="text" class=" form-control" name="name">
                    </li>
                    <li>
                        <div id="fav_show_wrapper mt-0">
                            <label for="fav_Show" id="fav_show_label">Category:</label>
                            <select id="category" name="category" class="form-control filter-slect" value="" data-val="true">
                                <option title="" value="" label=""></option>
                                @foreach ($category as $search)
                                    <option value="{{ $search->id }} ">{{ $search->category_title }}
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
                    <a href="{{ route('pastevent') }}">My Past Events</a>
                </li>
                <li>
                    <a href="{{ route('upcomingevent') }}">My Upcoming Events</a>
                </li>
            </ul>

            <div class="row w-100 video-cat-main m-0">
                @foreach ($showevent as $showevents)
                    <div class="col-md-6 col-lg-4">
                        <div class="video-box-main">
                            @if ($showevents->main_photo)
                                <div class="col-6">
                                    <img src="{{ asset('/admin/eventss/' . $showevents->main_photo) }} " alt=""
                                        id="user-image" height="100px">
                                </div>
                            @elseif ($showevents->event_add_ytlink)
                                <div class="video-box">
                                    <iframe src="{{ $showevents->event_add_ytlink }}" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            @endif
                            <div class="video-bottom-text">
                                <h3>{{ $showevents->event_title }}</h3>
                                </h3>
                                <div>
                                    <p>55 mins</p>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                            {{-- @dd(
                                $showevents
                            ); --}}
                            <div class="video-bottom-description">
                                <h5>{{ date('m/d/Y', strtotime($showevents->date)) }}</h5>
                                <p><span>Presented by:</span> <a href="{{ $showevents->presenter_one_url }}"
                                        class="vetvine_a" target="_blank">{{ $showevents->presenter_one }}</a><br />

                                        <strong>Sponsored by:</strong>   @foreach ($showevents->members as $item)
                                    <a href="{{ $item->sponser_link }}"
                                        class="vetvine_a" target="_blank"
                                        rel="noopener noreferrer">{{ $item->sponser_name }}</a>
                                        @endforeach
                                </p>


                                </p>
                                <p class="para-decription">
                                    {{ Str::limit($showevents->event_description, 250) }}
                                </p>

                                <a href="{{ route('upcoming_details', $showevents->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
