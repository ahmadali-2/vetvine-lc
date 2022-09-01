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

        .video-section-wrapper {
    width: 100%;
    display: inline-block;
    border-top: 0px solid #68868e !important;
    /* padding-top: 23px; */
}

        /* End */
    </style>

    <body>
        <!-- Login Modal Form  Start-->
        <button type="button" class="btn btn-primary d-none" id="register_video_btn" data-toggle="modal"
        data-target="#video_registration_model">
        Launch demo modal
        </button>
        <div class="modal fade" id="video_registration_model">
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
                    <div id="login_main_body"></div>
                    {{-- End Modal body here --}}
                </div>
            </div>
        </div>
        <section class="video-section-wrapper mb-4 upcoming-home-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="{{ url('/') }}" role="button" tabindex="0">Home</a>
                                </li> --}}
                                <li class="breadcrumb-item"><a onclick="history.back()" href="javascript::void();">Videos On Demand</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $videos->video_title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="video-detail-inner">
                    <div class="video-title-he d-flex flex-wrap justify-content-between ">
                        <h2>{{ $videos->video_title }}</h2>
                        {{-- <div class="" > --}}
                        {{-- <a href="#" class="vd-more-inf mt-0">More Info</a> --}}
                        {{-- </div> --}}
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10  inner_box_chat">
                                <input type="hidden" name="event_id" value="{{ $videos->id }}">
                                <input type="hidden" name="user_id" value="{{ $videos->user_id }}">
                                {{-- <p class="font-weight-bold ">Review</p> --}}
                               @isset($purchasedvideo)


                                <div>
                                    <select name="" class="videostars">
                                        <option value="">--</option>
                                        <option value="1" @if($rating == 1 || $rating == 0) selected @endif>1</option>
                                        <option value="2" @if($rating == 2) selected @endif>2</option>
                                        <option value="3" @if($rating == 3) selected @endif>3</option>
                                        <option value="4" @if($rating == 4) selected @endif>4</option>
                                        <option value="5" @if($rating == 5) selected @endif>5</option>
                                    </select>
                                </div>

                                <br>
                                <div class="time">
                                    <p>1 hr 4 min</p>
                                </div>
 @endisset

                                <div class="public2-info">
                                    <div class="public2-title">

                                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="arrow-right icon">

                                    </div>

                                    <div class="public2-description">
                                        <b class="ml-2 text-uppercase"> {{ $videos->presented_by }}</b>
                                    </div>
                                </div>





                                <div class="public2-info sponser">
                                    <div class="public2-title sponsor-title">
                                        Sponsor(s): vetvine ;
                                    </div>
                                    @foreach ($sponsor as $items)
                                    <div class="public2-description spon-descripton">
                                        <a href="{{ $items->sponser_link }}" class="vetvine_a" target="_blank">{{ $items->sponser_name }}</a>
                                    </div>
                                @endforeach
                                  </div>
                                  @if (isset($purchasedvideo))
                                  <div class="publication-detail register_btn">
                                    <a id="" style="cursor: pointer">Attend Video!</a>
                                </div>
                                  @else
                                  <div class="publication-detail register_btn">
                                    <a id="videoRegister" style="cursor: pointer">Register Now</a>
                                </div>
                                @endif
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </section>
                    {{-- <div class="detail-vedio">
                        <iframe src="{{ $videos->video_link }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div> --}}
                    <div class="container">
                    <div class="video-detail-para border-0">
                        <p>
                            {!! $videos->video_description !!}
                        </p>
                    </div>
                </div>


                <section class="video-section-wrapper border-top-0 mb-4">
                    <div class="container">
                        <div class="row w-100 m-0">
                            <div class="col-12 might_margin">
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
                                            <a style="color: #869799;" href="{{ route('video_desc', [$item->id, $item->category_id]) }}"  >
                                                {{ $item->video_title }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </section>
                </div>
            </div>

        @section('scripts')
            <script src="{{asset('js/jquery.fontstar.js')}}"></script>
            <script>
                $(document).ready(function() {
                    var video_id = '<?php echo $videoId ?>';
                    var authUser = '<?php echo $authUser ?>';
                    var rating = '<?php echo $rating ?>';
                    var category_id = '<?php echo $categoryId ?>'

                    $('.videostars').fontstar({
                        icon:"fa fa-star-o",
                        iconfull:"fa fa-star",
                        hovercolor:"#F39F25",
                        starcolor:"#969696",
                        selectable:true
                    },function(value,self){
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('rating.videos') }}",
                            type: "POST",
                            data: {
                                length: value,
                                video_id: $('input[name="event_id"]').val(),
                                user_id: $('input[name="user_id"]').val()
                            },
                            success: function(response) {
                            }
                        });
                    });
                $('#videoRegister').on('click', function(){
                        refreshFormState();
                        var url=location.href;
                        localStorage.setItem('guestLogin', true);
                        localStorage.setItem("videoUrl",url);

                        if(authUser == false){
                            $('#login_form_show_btn').trigger("click");
                        }else{
                                $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: "POST",
                                url: "/vetvine-member/getVideoPrice",
                                data: {video_id: video_id, category_id:category_id},
                                success: function(response) {
                                    console.log(response);
                                    $('#event_detail_heading').html(response.data['title']);
                                    $('#event_protocol_heading').html(response.data['protocol']+': <b>'+'$'+response.data['fee']+'</b>');
                                    $('#continue_guest').html('PAY $'+response.data['fee']);
                                    $('#event_detail_event_id').val(response.data['video_id']);
                                    $('#category_id').val(response.data['category_id']);
                                    $('#event_detail_user_id').val(response.data['user_id']);
                                    if(response.data['fee'] == "Free"){
                                        $('#event_detail_amount').val(0);
                                    }else{
                                        $('#event_detail_amount').val(response.data['fee']);
                                    }
                                    $('#event_detail_title').val(response.data['title']);
                                    $("#video").val(1);
                                }
                            });
                            $('#register_video_btn').trigger("click");
                        }
                    });
                });

                function refreshFormState(){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        type: "GET",
                        url: '/next-guest-screen',
                        data: {guest_screen: 2},
                        success: function(response){
                            $('#login_main_body').empty();
                            $('#login_main_body').append(response.html);
                        }
                    });
                }
                // });
            </script>
        @endsection
    @endsection
