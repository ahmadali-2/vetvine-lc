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

        /* End */
    </style>
    <section class="video-section-wrapper mb-4">
        {{-- @dd($eventdetail->event_title) --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" role="button" tabindex="0">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a onclick="history.back()" href="javascript::void();">UPCOMING
                                    WEBINARS</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $eventdetail->event_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <form action="{{ route('submitPayment') }}" method="POST">
                <div class="public-detail-inner">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="event_id" value="{{ $eventdetail->id }}">
                    <input type="hidden" name="user_id" value="{{ $eventdetail->user_id }}">
                    <div class="public-cat">
                        <img src="{{ asset('/admin/eventss/' . $eventdetail->main_photo) }}" alt="">
                    </div>
                    <h2>{{ $eventdetail->event_title }}</h2>

                    <div class="publication-detail">
                        <div class="publication-arrow-icon">
                            <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                        </div>
                        <div class="public2-info">
                            <div class="public2-title">
                                {{-- DESCRIgdgPTION: --}}
                            </div>
                            <div class="public2-description">
                                {{ $eventdetail->event_description }}
                            </div>
                        </div>
                    </div>
                    <div class="publication-detail">
                        <div class="publication-arrow-icon">
                            <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                        </div>
                        <div class="public2-info">
                            <div class="public2-title">
                                Date:
                            </div>
                            <div class="public2-description">
                                {{ $eventdetail->date }}
                            </div>
                        </div>
                    </div>
                    @if (Auth::user())
                        <div class="publication-detail">
                            <div class="publication-arrow-icon">
                                <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                            </div>

                            <div class="public2-info">
                                <div class="public2-title">
                                    Time:
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

                                        echo $convertedTime->format('H:i') . ' ' . $userTimeZone;
                                    @endphp
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="publication-detail">
                        <div class="publication-arrow-icon">
                            <img src="{{ asset('frontend/img/arrow-right.png') }}" alt="arrow-right icon">
                        </div>
                        <div class="public2-info">
                            <div class="public2-title">
                                Sponsor:
                            </div>
                            @foreach ($eventdetail->members as $items)
                                <div class="public2-description">
                                    {{ $items->sponser_name }}

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="publication-detail">
                        <div class="publication-arrow-icon">
                            <img src="{{ asset('frontend/img/arrow-right.png') }}" alt=" arrow-right icon">
                        </div>
                        <div class="public2-info">
                            <div class="public2-title">
                                Presenter(s):

                            </div>
                            <div class="public2-description">
                                {{ $eventdetail->presenter_one }}
                            </div>
                        </div>
                    </div>
                    <div class="publication-detail">
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
                    </div>
                    <div class="row">
                        <div class="col-sm-12 my-3">
                            <button type="submit" class="click_join">Click me to
                                Join</button>
                        </div>
                    </div>

                </div>
            </form>



            @if (Auth::user())
                <div class="row">
                    <div class="leftcolumn">
                        <div class="card pt-0">
                            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                                <div>

                                    <div class="row header_row">
                                        <div class="col-lg-4">
                                            <h4>Comment Section </h4>
                                        </div>
                                    </div>
                                    <div class="row mt-5">

                                        <div class="col-sm-12 mt-5">

                                            @foreach ($eventdetail->ReviewData as $review)
                                                <div class=" review-content" id="review-section">
                                                    <img src="https://www.w3schools.com/howto/img_avatar.png"
                                                        class="avatar ">
                                                    <span class="font-weight-bold ml-2">
                                                        {{ $review->users->name ? $review->users->name : 'Annonyomus' }}</span>{{ $review->created_at->diffForHumans() }}
                                                    <p class="mt-1">
                                                        @for ($i = 1; $i <= $review->star_rating; $i++)
                                                            <span><i class="fa fa-star text-warning"></i></span>
                                                        @endfor
                                                        {{-- <span class="font ml-2">{{$review->email}}</span> --}}
                                                    </p>
                                                    <p class="description ">
                                                        {{ $review->comments }}
                                                    </p>
                                                    @if (auth()->user()->id == $review->user_id)
                                                        <button class="edit" type="button" data-toggle="modal"
                                                            data-target="#ajax-book-model" data-id="{{ $review->id }}">
                                                            <i class="fas fa-edit text-primary"></i></buttont>
                                                    @endif
                                                </div>
                                                <hr>
                                                {{-- <form action="{{ route('review.delete') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="event_id" value="{{ $review->event_id }}">
                                                    <input type="hidden" name="user_id" value="{{ $review->user_id }}">
                                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                                    <button type="submit" class="click_join">Delete</button>
                                                </form> --}}
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Review store Section -->
                            <div class="container">
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
                                                        <input type="radio" id="star5" class="rate"
                                                            name="rating" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" checked id="star4" class="rate"
                                                            name="rating" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" class="rate"
                                                            name="rating" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" class="rate"
                                                            name="rating" value="2">
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" class="rate"
                                                            name="rating" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-sm-12 ">
                                                    <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200" required></textarea>
                                                    @error('comment')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mt-3 ">
                                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.pages.webinars.upcoming_eventjquery')
            @endif
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('#review-section').offset().top
            }, 'slow');

            $(document).on('click', 'input[type="checkbox"]', function() {
                $('input[type="checkbox"]').not(this).prop('checked', false);
            });

            $(document).on('click', '.edit', function() {
                $("#comments-model").val('');
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
                        $("#comments-model").empty();
                        $(".rate-modal").empty();
                        var i = 1;
                        var j = 1;
                        var rating = res.review.star_rating;
                        var comments = res.review.comments;
                        $("#comments-model").val(comments);

                        for (i = 1; i <= rating; i++) {
                            
                            $(".rate-modal").append(`
                        <input type="radio" id="star` + i + `" class="rate review1 " name="review1"   data-stars="` +
                                i +
                                `" value="` + i + `" />
                        <label class="" for="star` + i + `" title="text">` + i + `stars</label>
                        `);
                        }

                        for (j = 1; j <= 5 - rating; j++) {
                            $(".rate-modal").append(`
                        <input type="radio" id="star` + i + `" class="rate" name="review1" data-stars="` + i +
                                `" value="` + i + `" />
                        <label class="" for="star` + i + `" title="text">` + i + `stars</label>
                        `);
                            i += 1;
                        }
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
                        rating: $(".review1").val(),
                        comment: $("#comments-model").val()
                    },
                    dataType: 'json',
                    success: function(res) {
                        window.location.reload();
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    }
                });
            });

            $(document).on('click', 'input.rate:radio', function() {
                var length = $(this).val();
                $("#rating").val('');
                $("#rating").val(length);
            });

            $(document).on('click', '.edit', function() {

            })
        });
    </script>
@endsection
