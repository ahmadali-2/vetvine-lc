@extends('frontend.master')
@section('content')
    <style>
        * {
            box-sizing: border-box;
            font-family: "Museo 500";
        }

        /* Add a gray background color with some padding */
        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        /* here */
        .editRate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .editRate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .editRate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .editRate:not(:checked)>label:before {
            content: '★ ';
        }

        .editRate>input:checked~label {
            color: #ffc700;
        }

        .editRate:not(:checked)>label:hover,
        .editRate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .editRate>input:checked+label:hover,
        .editRate>input:checked+label:hover~label,
        .editRate>input:checked~label:hover,
        .editRate>input:checked~label:hover~label,
        .editRate>label:hover~input:checked~label {
            color: #c59b08;
        }

        /* here */
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            display: none;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .rating-container .form-control:hover,
        .rating-container .form-control:focus {
            background: #fff;
            border: 1px solid #ced4da;
        }

        .rating-container textarea:focus,
        .rating-container input:focus {
            color: #000;
        }

        #ajax-book-model .form-control {
            border: 1px solid #ced4da !important;
        }

        #ajax-book-model .btn-primary {
            color: #fff;
            background-color: #f27222;
            border-color: #f27222;
        }

        #ajax-book-model h4 {
            padding-left: 15px;
        }

        .public-detail-inner h2 {
            font-size: 24px;
            letter-spacing: 1px;
            color: #5c7c85;
            font-family: "Museo 500";
            padding: 30px 0px 0px 0px;
            margin-bottom: 0 !important;
            font-family: 'Museo 500';
        }

        .leftcolumn h4 {
            padding-left: 1rem;
            margin-top: 10px;
            font-family: 'Museo 500';
        }

        #ajax-book-model .form-control {
            border: 1px solid #ced4da !important;
        }

        #ajax-book-model .btn-primary {
            color: #fff;
            background-color: #f27222;
            border-color: #f27222;
        }

        #ajax-book-model h4 {
            padding-left: 15px;
        }

        .public-detail-inner h2 {
            font-size: 24px;
            letter-spacing: 1px;
            color: #5c7c85;
            font-family: "Museo 500";
            padding: 30px 0px 0px 0px;
            margin-bottom: 0 !important;
            font-family: 'Museo 500';
        }

        .leftcolumn h4 {
            padding-left: 1rem;
            margin-top: 10px;
            font-family: 'Museo 500';
        }

        .date-info {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .dte {
            display: flex;
            margin-bottom: 10px;
        }

        .dte .public2-title {
            margin-right: 10px;
        }

        .tim {
            display: flex;
            width: 100%;
            margin-bottom: 20px;
        }

        .tim .public2-title {
            margin-right: 10px;
        }

        @media (max-width:575px) {
            .sponsor-title {
                font-size: 11px;
            }

            .spon-descripton {
                font-size: 12px;
            }
        }

        .spon-descripton:not(:last-child)::after {
            content: " , ";
        }

        .tim .public2-description {
            width: 86%;
        }

        .view_time_zone {
            color: #f27222;
        }

        .view_time_zone:hover {
            color: #5c7c85;
        }

        /* End */


        #ajax-book-model .btn-primary {
            color: #fff;
            background-color: #f27222;
            border-color: #f27222;
            border-radius: 12px;
            width: 102px;
            transition: 0.3s all;
            border: 2px solid #f27222 !important;
        }

        .timezone_btn_close {
            color: #fff;
            background-color: #f27222;
            border-color: #f27222;
            border-radius: 12px;
            width: 102px;
            transition: 0.3s all;
            border: 2px solid #f27222 !important;
        }

        .timezone_btn_close:hover {
            background: transparent;
            border: 2px solid #f27222 !important;
            color: #f27222;
        }

        #ajax-book-model .btn-primary:hover {
            background: transparent;
            border: 2px solid #f27222 !important;
            color: #f27222;
        }


        .video-section-wrapper {
            width: 100%;
            display: inline-block;
            border-top: 0px solid #68868e !important;
            /* padding-top: 23px; */
        }

        .time_zone_content {

            color: #4C5B67;
            background: #ddf0f7;
        }
    </style>

    {{-- timezone modal box --}}

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="timzeZone" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content time_zone_content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a onclick="history.back()" href="javascript::void();">Upcoming
                                        Webinars</a></li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a onclick="history.back()" href="javascript::void();">Molestiae Repellendu</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Timezone
                                </li>
                            </ol>
                        </nav>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-y: scroll; height: 400px">
                    <div id="eventTimezonesBody"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary timezone_btn_close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- timezone modal box --}}






    <?php
    use App\Models\Generals\TimeZone;
    $convertedTime = null;
    ?>
    <!-- Login Modal Form  Start-->
    <button type="button" class="btn btn-primary d-none" id="register_event_btn" data-toggle="modal"
        data-target="#event_registration_model">
        Launch demo modal
    </button>
    <div class="modal fade" id="event_registration_model">
        <div class="modal-dialog custum_popup">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="popup-header">
                        <span class="popup-logo"><img src="{{ asset('frontend/images/popup-logo.png') }}"
                                alt="logo"></span>
                        <span class="close" id="login_modal_close" data-dismiss="modal">&times;</span>
                    </div>
                </div>
                <!-- Modal body -->
                <div id="login_main_body">
                    {{-- @include('frontend.auth.event_registration_completed') --}}

                    @include('frontend.auth.login_course_registration_detail')
                    {{-- @include('frontend.auth.login_course_registration_payment',[
                    'event_price' => 25,
                    'event_id' => 14,
                ]) --}}
                    {{-- @include('frontend.auth.login_course_registration_detail') --}}
                    {{-- @include('frontend.auth.register_login') --}}
                </div>
                {{-- End Modal body here --}}
            </div>
        </div>
    </div>
    <!-- Login Modal Form  End-->
    {{-- <div class="modal fade" id="calendarModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Event Calendar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="eventCalendarDiv"></div>
          </div>
        </div>
      </div> --}}
    <section class="video-section-wrapper mb-4">
        {{-- @dd($eventdetail->event_title) --}}
        <div class="container-fluid p-0">

            <div action="{{ route('submitPayment') }}" method="POST">
                <div class="public-detail-inner">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="event_id" value="{{ $eventdetail->id }}">
                    <input type="hidden" name="user_id" value="{{ $eventdetail->user_id }}">
                    <div class="public-cat upcoming-home-bg2">
                        {{-- <img src="{{ asset('/admin/eventss/' . $eventdetail->main_photo) }}" alt=""> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a onclick="history.back()"
                                            href="javascript::void();">Upcoming
                                            Webinars</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $eventdetail->event_title }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <h2 class="web_heading">{{ $eventdetail->event_title }}</h2>


                    <div class="publication-detail">
                        <div class="publication-arrow-icon">

                        </div>
                        <div class="public2-info date-info">
                            <div class="dte">
                                <div class="public2-title">
                                    Date:
                                </div>
                                <div class="public2-description">
                                    {{ date('F,d,Y', strtotime($eventdetail->date)) }}
                                </div>
                            </div>
                            <div class="tim">
                                <div class="public2-title">
                                    Time:
                                </div>
                                <div class="public2-description">
                                    @auth
                                        @php
                                            $timeZone = $eventdetail->user->timezone->timezone;
                                            // Fetching timezone UTC code : Please don't screw it
        $pieces = explode('(', $timeZone);
        $pieces = explode('C', $pieces[1]);
        $pieces = explode(')', $pieces[1]);

        // Formatting the time
        $today = new DateTime($eventdetail->time, new DateTimeZone($pieces[0]));

        $userTimeZone = Auth::user()->timezone->timezone;

        // Fetching timezone UTC code : Please don't screw it
                                            $pieces = explode('(', $userTimeZone);
                                            $pieces = explode('C', $pieces[1]);
                                            $pieces = explode(')', $pieces[1]);

                                            $userEventTime = new DateTimeZone($pieces[0]);
                                            $convertedTime = $today->setTimeZone($userEventTime);

                                            echo $convertedTime->format('H:i A') . ' ' . $userTimeZone;
                                        @endphp
                                    @else
                                        @php
                                            $newDateTime = date('h:i A', strtotime($eventdetail->time));

                                            echo $newDateTime . ' ET ';
                                        @endphp
                                    @endauth
                                </div>
                                @auth
                                    <div class="public2-info" style="margin-left: 12px; margin-bottom:0px ;">
                                        <a id="timezoneLink" data-toggle="modal" data-target="#timzeZone" class="view_time_zone"
                                            href="#"> View Other
                                            Timezones</a>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                    {{-- @if (Auth::user())
                        <div class="publication-detail">
                            <div class="publication-arrow-icon">

                            </div>

                            <div class="public2-info">
                                <div class="public2-title">
                                    Time:

                                </div>
                                <div class="publication-detail">
                                    @php
                                        $eventTime = $eventdetail->time;
                                        $timeZone = $eventdetail->user->timezone->timezone;
                                        // Fetching timezone UTC code : Please don't screw it
                                        $pieces = explode('(', $timeZone);
                                        $pieces = explode('C', $pieces[1]);
                                        $pieces = explode(')', $pieces[1]);

                                        // Formatting the time
                                        $today = new DateTime($eventdetail->time, new DateTimeZone($pieces[0]));

                                        $userTimeZone = Auth::user()->timezone->timezone;

                                        // Fetching timezone UTC code : Please don't screw it
                                        $pieces = explode('(', $userTimeZone);
                                        $pieces = explode('C', $pieces[1]);
                                        $pieces = explode(')', $pieces[1]);

                                        $userEventTime = new DateTimeZone($pieces[0]);
                                        $convertedTime = $today->setTimeZone($userEventTime);

                                        echo $convertedTime->format('H:i A') . ' ' . $userTimeZone;
                                    @endphp
                                    <a href="" class="time_zone">View Other Time Zone</a>
                                </div>
                            </div>
                            <div class="public2-info" style="margin-left: 12px">
                                <a href="{{ $eventdetail->timezone_url }}"> View Other Timezone</a>
                            </div>
                        </div>
                    @endif --}}


                    <div class="publication-detail">
                        <div class="publication-arrow-icon">

                        </div>
                        <div class="public2-info">
                            <div class="public2-title">
                                {{-- Presenter(s): --}}
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="arrow-right icon">

                            </div>
                            <div class="public2-description">
                                <b class="ml-2 text-uppercase"> {{ $eventdetail->presenter_one }}</b>
                            </div>
                        </div>
                    </div>

                    <div class="publication-detail">
                        <div class="publication-arrow-icon">

                        </div>
                        <div class="public2-info">
                            <div class="public2-title sponsor-title">
                                Sponsor(s): vetvine ;
                            </div>
                            @foreach ($eventdetail->members as $items)
                                <div class="public2-description spon-descripton">
                                    <a href="{{ $items->sponser_link }}" class="vetvine_a"
                                        target="_blank">{{ $items->sponser_name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="publication-detail register_btn">
                        @if (isset($purchasedEvent))
                            <div id="startsIn" class="public2-title sponsor-title" style="padding-left: 0px">

                            </div>
                            <h1 id="eventCountdown"></h1>
                            {{-- <button class="btn btn-primary">Attend Event?</button> --}}
                        @else
                            <button class="btn btn-primary" id="register_event">Register Now</button>
                        @endif

                    </div>
                </div>
                {{-- <div class="publication-detail">
                        <div class="publication-arrow-icon">
                            <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                        </div>
                        <div class="public2-info d-flex justify-content-around">
                            <div class="public2-title">
                                <input type="radio" class="check_class" id="first_price" name="event_price"
                                    value="{{ $eventdetail->pet_owner_fee }}">
                                <label for="first_price">Pet Owner Fee : ${{ $eventdetail->pet_owner_fee }} </label>
                            </div>
                            <div class="public2-title">
                                <input type="radio" id="second_price" class="check_class" name="event_price"
                                    value="{{ $eventdetail->pet_owner_premium_fee }}">
                                <label for="second_price">Pet Owner Premium Fee
                                    : ${{ $eventdetail->pet_owner_premium_fee }} </label>
                            </div>
                            <div class="public2-title">
                                <input type="radio" id="third_price" class="check_class" name="event_price"
                                    value="{{ $eventdetail->vet_pet_prof_fee }}">
                                <label for="third_price">Vet/Pet Prof. Fee :
                                    ${{ $eventdetail->vet_pet_prof_fee }}</label>
                            </div>
                            <div class="public2-title">
                                <input style="width: 20px;height:20px;" type="radio" id="fourth_price" class="check_class"
                                    name="event_price" value="{{ $eventdetail->vet_pet_prof_premium_fee }}">
                                <label for="fourth_price">Vet/Pet Prof. Premium
                                    Fee : ${{ $eventdetail->vet_pet_prof_premium_fee }}</label>
                            </div>
                        </div>
                    </div> --}}
                @auth
                    <div class="row">
                        <button id="calendarModelButtonAction" type="button" class="upcoming_btn" data-toggle="modal"
                            data-target="#calendarModel" hidden><i class="fa fa-calendar" aria-hidden="true"></i> </button>
                        @if (isset($purchasedEvent))
                            <button id="calendarModelButton" type="button" class="upcoming_btn"
                                style="background-color: #f27222"><i class="fa fa-calendar" aria-hidden="true"></i> - Add to
                                Calendar</button>
                        @endif
                    </div>
                @endauth
                {{-- <div class="row">
                        <div class="col-sm-12 my-3">
                            <button type="submit" class="click_join">Click me to
                                Join</button>
                        </div>
                    </div> --}}



            </div>
            </form>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 upcoming_para">
                <p class="desription_p">
                    {!! $eventdetail->event_description !!}
                </p>
            </div>
        </div>
    </div>






    {{-- You May Also Like  --}}
    <section class="video-section-wrapper border-top-0 mb-4">
        <div class="container">
            <div class="col-12 might_margin">
                @if(count($youMaylikePost) > 0)
                    <h1 class="Upcoming-webinars">You might also like</h>
                @endif
            </div>
                <div class="row w-100 video-cat-main m-0">
                    @foreach ($youMaylikePost as $showevents)
                        <div class="col-md-6 col-lg-4 p-0">
                            <div class="video-box-main upcoming_content">
                                @if ($showevents['main_photo'])
                                    <div class="   pl-0">
                                        <img src="{{ asset('/admin/eventss/' . $showevents['main_photo']) }} " alt=""
                                            id="user-image" height="100px">
                                    </div>
                                @endif
                                <div class="video-bottom-text">
                                    <h3>{{ $showevents['event_title'] }}</h3>


                                </div>

                                <div class="video-bottom-description">
                                    <h5 class="my-3">{{ date('m/d/Y', strtotime($showevents['date'])) }}</h5>
                                    <p><strong>Presented by:</strong> <a href="{{ $showevents['presenter_one_url'] }}"
                                            class="vetvine_a" target="_blank">{{ $showevents['presenter_one'] }}</a>

                                    <p class="para-decription">

                                        {!! Str::limit($showevents['event_description'], 200) !!}
                                    </p>
                                    <a href="{{ route('upcoming_details', $showevents['id']) }}" class="read_more_btn">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>









    @if (Auth::user())
        {{-- <div class="container">
            <div class="row">
                <div class="leftcolumn">
                    <div class="card pt-0">
                        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                            <div>
                                <div class="row header_row">
                                    <div class="col-lg-4">
                                        <h4>Review Section</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">

                                <div class="col-sm-12 mt-5">

                                    @foreach ($eventdetail->ReviewData as $review)
                                        <div class=" review-content" id="review-section">
                                            <img src="https://www.w3schools.com/howto/img_avatar.png" class="avatar ">
                                            <span class="font-weight-bold ml-2">
                                                {{ $review->users->name ? $review->users->name : 'Annonyomus' }}
                                            </span>{{ $review->created_at->diffForHumans() }}
                                            <p class="mt-1">
                                                @for ($i = 1; $i <= $review->star_rating; $i++)
                                                    <span><i class="fa fa-star text-warning"></i></span>
                                                @endfor
                                                <span class="font ml-2">{{$review->email}}</span>
                                            </p>
                                            <p class="description ">
                                                {{ $review->comments }}
                                            </p>
                                            @if (auth()->user()->id == $review->user_id)
                                                <button class="edit" style="background: transparent;" type="button"
                                                    data-toggle="modal" data-target="#ajax-book-model"
                                                    data-id="{{ $review->id }}"
                                                    data-comment="{{ $review->comments }}">
                                                    <i class="fas fa-edit text-primary"></i></button>
                                            @endif
                                        </div>
                                        <hr>
                                        <form action="{{ route('review.delete') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="event_id" value="{{ $review->event_id }}">
                                                    <input type="hidden" name="user_id" value="{{ $review->user_id }}">
                                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                                    <button type="submit" class="click_join">Delete</button>
                                                </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review store Section -->
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-sm-10 mt-4  inner_box_chat" id="comment-section">
                                <form class="py-2 px-4" action="{{ route('reviewstore') }}"
                                    style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="event_id" value="{{ $eventdetail->id }}">
                                    <input type="hidden" name="user_id" value="{{ $eventdetail->user_id }}">
                                    <p class="font-weight-bold ">Review</p>
                                    <div class="form-group row">
                                        <div class="col-sm-6 rating_box">
                                            <div class="rate">
                                                <input type="radio" id="star5" class="rate" name="rating"
                                                    value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" checked id="star4" class="rate"
                                                    name="rating" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" class="rate" name="rating"
                                                    value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" class="rate" name="rating"
                                                    value="2">
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" class="rate" name="rating"
                                                    value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12 ">
                                            <textarea class="form-control" name="comment" rows="6 " placeholder="Review" maxlength="200" required></textarea>
                                            @error('comment')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-3 ">
                                        <button class="upcoming_btn  py-2 px-3 btn-info">Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        @include('frontend.pages.webinars.upcoming_eventjquery')
    @endif


@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            localStorage.setItem('guestLogin', false);
            localStorage.setItem("eventUrl", '');
            var event_id = '<?php echo $eventId; ?>';
            var authUser = '<?php echo $authUser; ?>';
            var eventTime = '<?php echo $eventTime; ?>'
            // Event counter starts
            // Set the date we're counting down to
            var countDownDate = new Date(eventTime).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("eventCountdown").innerHTML =
                        '<button class="btn btn-primary">Attend Event</button>';
                } else {
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    document.getElementById("eventCountdown").innerHTML = '<b>' + days + "d " + hours +
                        "h " +
                        minutes + "m " + seconds + "s " + '</b>';
                    document.getElementById('startsIn').innerHTML = 'Starts In :';
                }
            }, 1000);
            //Event counter End.
            $('#timezoneLink').on('click', function() {
                var event_id = '<?php echo $eventId; ?>';
                var eventTime = '<?php echo $eventTime; ?>';
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/load-other-timezones",
                    data: {
                        event_id: event_id,
                        event_time: eventTime,
                    },
                    success: function(response) {
                        $('#eventTimezonesBody').empty();
                        $('#eventTimezonesBody').append(response.html);
                    }
                });
            });

            $('#register_event').on('click', function() {
                var url = location.href;
                if (authUser == false) {
                    localStorage.setItem('guestLogin', true);
                    localStorage.setItem("eventUrl", url);
                    $('#login_form_show_btn').trigger("click");
                } else {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: "/vetvine-member/getEventPrice",
                        data: {
                            event_id: event_id
                        },
                        success: function(response) {
                            $('#event_detail_heading').html(response.data['title']);
                            $('#event_protocol_heading').html(response.data['protocol'] +
                                ': <b>' + '$' + response.data['fee'] + '</b>');
                            $('#continue_guest').html('PAY $' + response.data['fee']);
                            $('#event_detail_event_id').val(response.data['event_id']);
                            $('#event_detail_user_id').val(response.data['user_id']);
                            $('#event_detail_amount').val(response.data['fee']);
                            $('#event_detail_title').val(response.data['title'])
                        }
                    });
                    $('#register_event_btn').trigger("click");
                }
            });
            $('#calendarModelButton').on('click', function() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "GET",
                    url: "/add-vetvine-event",
                    data: {
                        event_id: event_id
                    },
                    success: function(response) {
                        $('#eventCalendarDiv').empty();
                        $('#eventCalendarDiv').append(response.html);
                        downloadEvent(response.event[0]);
                        if (response.code == 200) {
                            toastr.success(response.message);
                        }
                        $('#calendarModelButtonAction').trigger("click");
                    }
                });
            });

            function downloadEvent(event) {
                var todayDate = new Date();
                const startEvent = new Date(event.event_start);
                const endEvent = new Date(event.event_end);

                var msgData = todayDate.toISOString();
                var startDate = startEvent.toISOString();
                var endDate = endEvent.toISOString();
                var icsMSG1 =
                    "BEGIN:VCALENDAR\r\nVERSION:2.0\r\nPRODID:https://www.google.com/\r\nBEGIN:VEVENT\r\nUID:https://www.google.com/\r\nDTSTAMP:" +
                    msgData + "Z\r\nDTSTART:" + startDate + "\r\n";

                var icsMSG2 = '';
                if (endDate != '') {
                    icsMSG2 = "DTEND:" + endDate + "\r\n";
                }

                icsMSG3 = "SUMMARY:" + event.event_name + "\r\nEND:VEVENT\r\nEND:VCALENDAR";

                icsMSG = icsMSG1 + icsMSG2 + icsMSG3;
                window.open("data:text/calendar;charset=utf8," + escape(icsMSG));
            }

            $(document).on('click', 'input[type="checkbox"]', function() {
                $('input[type="checkbox"]').not(this).prop('checked', false);
            });

            $(document).on('click', '.edit', function() {
                $("#comments-model").val($(this).attr('data-comment'));
                var id = $(this).data('id');
                $("#review-id").val(id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "{{ route('comment.edit') }}",
                    data: {
                        id: id,
                    },
                    dataType: 'json',
                    success: function(res) {
                        $(".edit-rate-modal").empty();
                        var rating = res.review.star_rating;
                        console.log('actual rating' + rating);
                        for (var i = 1; i <= rating; i++) {
                            $(".edit-rate-modal").append(`
                        <input type="radio" id="starEdit` + i +
                                `" class="editRate review1 " name="review1"  data-stars="` +
                                i +
                                `" value="` + i + `" />
                        <label id="starLabel` + i + `" class="" for="starEdit` + i +
                                `" title="text" style="color:#ffc107" data-stars=` + i +
                                `>` + i + `stars</label>
                        `);
                        }

                        for (var j = rating + 1; j <= 5; j++) {
                            $(".edit-rate-modal").append(`
                        <input type="radio" id="starEdit` + j +
                                `" class="editRate" name="review1 review1" data-stars="` +
                                j +
                                `" value="` + j + `" />
                        <label id="starLabel` + j + `" class="" for="starEdit` + j +
                                `" title="text" style="color:#eee" data-stars=` + j + `>` +
                                j + `stars</label>
                        `);
                        }
                        activateStarEvents();
                    }
                });
            });


            $('body').on('click', '#btn-save', function(e) {
                e.preventDefault();
                var id = $("#review-id").val();
                var comment = $("#comment-model").val();
                $("#btn-save").html('Please Wait...');
                $("#btn-save").attr("disabled", true);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "{{ route('comment.update') }}",
                    data: {
                        review_id: $("#review-id").val(),
                        rating: $("#rating").val(),
                        comment: $("#comments-model").val()
                    },
                    dataType: 'json',
                    success: function(res) {
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                        location.reload();
                    }
                });
            });

            $(document).on('click', 'input.rate:radio', function() {
                var length = $(this).val();
                $("#rating").val('');
                $("#rating").val(length);
            });

            $(document).on('click', 'input.editRate:radio', function() {
                var length = $(this).val();
                $("#rating").val('');
                $("#rating").val(length);
            });
        });

        function activateStarEvents() {
            $('.edit-rate-modal label').on('click', function() {
                var star = $(this).attr('data-stars');
                var i = 1;
                var remainingStars = 5 - star;
                for (i = 1; i <= star; i++) {
                    var starId = '#starLabel' + i;
                    if ($(starId).length) {
                        $(starId).css('color', '#ffc107');
                    }
                }
                for (var j = i; j <= 5; j++) {
                    var starId = '#starLabel' + j;
                    if ($(starId).length) {
                        $(starId).css('color', '#ccc');
                    }
                }
            });
        }
    </script>
@endsection
