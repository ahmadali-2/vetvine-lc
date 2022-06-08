@extends('frontend.master')
@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

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

        /* End */
    </style>
    <section class="video-section-wrapper mb-4">
        <div class="container">
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
                                DESCRIPTION:
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
                                </div>
                                @php
                                    $eventTime = $eventdetail->time;
                                    $timeZone = $eventdetail->user->timezone->name;
                                    $today = new DateTime($eventdetail->time, new DateTimeZone($timeZone));
                                    // $today->format('Y-m-d H:i').'<br>';
                                    $userTimeZone = Auth::user()->timezone->name;
                                    $userEventTime = new DateTimeZone($userTimeZone);
                                    $convertedTime = $today->setTimeZone($userEventTime);
                                    $formattedTime = $convertedTime->format('H:i');
                                @endphp
                                <div class="public2-description">
                                    {{ date('g:i a', strtotime($formattedTime)) }}
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
                            <img src="{{ asset('frontend/img/arrow-right.png') }}"" alt=" arrow-right icon">
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
                                <input type="checkbox" class="check_class" id="first_price" name="event_price"
                                    value="{{ $eventdetail->pet_owner_fee }}"> Pet Owner Fee :
                                <label for="first_price"> ${{ $eventdetail->pet_owner_fee }} </label>
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" id="second_price" class="check_class" name="event_price"
                                    value="{{ $eventdetail->pet_owner_premium_fee }}"> Pet Owner Premium Fee
                                :
                                <label for="second_price"> ${{ $eventdetail->pet_owner_premium_fee }} </label>
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" id="third_price" class="check_class" name="event_price"
                                    value="{{ $eventdetail->vet_pet_prof_fee }}"> Vet/Pet Prof. Fee :
                                <label for="third_price"> ${{ $eventdetail->vet_pet_prof_fee }}</label>
                            </div>
                            <div class="public2-title">
                                <input type="checkbox" id="fourth_price" class="check_class" name="event_price"
                                    value="{{ $eventdetail->vet_pet_prof_premium_fee }}"> Vet/Pet Prof. Premium
                                Fee :
                                <label for="fourth_price"> ${{ $eventdetail->vet_pet_prof_premium_fee }}</label>
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
                        <div class="card">
                            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                                <div>
                                    <div class="row mt-5">
                                        <h4>Comment Section :</h4>
                                        <div class="col-sm-12 mt-5">

                                            @foreach ($eventdetail->ReviewData as $review)
                                                <div class=" review-content">
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
                                                        <a href="javascript:void(0)" class="edit"
                                                            data-id="{{ $review->id }}"><i
                                                                class="fas fa-edit text-primary"></i></a>
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
                                    <div class="col-sm-10 mt-4 ">
                                        <form class="py-2 px-4" action="{{ route('reviewstore') }}"
                                            style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                            @csrf
                                            <input type="hidden" name="event_id" value="{{ $eventdetail->id }}">
                                            <input type="hidden" name="user_id" value="{{ $eventdetail->user_id }}">
                                            <p class="font-weight-bold ">Review</p>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
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
                                                    <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
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


                <div class="modal fade" id="ajax-book-model" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Comment</h4>
                            </div>
                            <div class="modal-body">
                                <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm"
                                    class="form-horizontal" method="POST">
                                    <input type="hidden" name="id" value="" id="review-id">


                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Comment</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="comment" name="comment"
                                                placeholder="Enter Comment" value="" maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-primary" id="btn-save" value="addNewBook">Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
    </section>
    @endif
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', 'input[type="checkbox"]', function() {
                $('input[type="checkbox"]').not(this).prop('checked', false);
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#addNewBook').click(function() {

            $('#ajax-book-model').modal('show');
        });

        $('body').on('click', '.edit', function() {

            var id = $(this).data('id');

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ route('comment.edit') }}",
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(res) {

                    $('#review-id').val(res.id);
                    $('#comment').val(res.comments);
                    $('#ajax-book-model').modal('show');
                }
            });

        });



        $('body').on('click', '#btn-save', function(e) {
            e.preventDefault();

            var id = $("#review-id").val();

            var comment = $("#comment").val();

            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ route('comment.update') }}",
                data: {
                    id: id,
                    comment: comment,
                },
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                }
            });

        });
    </script>
@endsection
