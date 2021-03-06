<header class="main-wrapper">
    <?php $authUser= null; auth()->user() ? $authUser = Auth::user()->id : null; ?>
    <div class="top_Wrapper">
        <div class="container-fluid">

            <div class="container">
                <div class="top-social">

                    <ul class="list__icons dash-top-list">
                        <li>
                            <div class="input-group mb-3">
                                <span class="search-text">Search: &nbsp;</span>
                                <input type="text" class="form-control top-search" placeholder=""
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn search_btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="toggle-contact" data-toggle="modal" data-target="#myPopup"><span
                                    class="mail-logo"><i class="fa fa-envelope"></i></span> Stay in touch</a>
                        </li>
                        <li class="logout">
                            <form method="POST" action="{{ route('logout') }}">

                                @csrf
                                <a href="{{ route('logout') }}" class="toggle-contact"
                                    onclick="event.preventDefault();

              this.closest('form').submit();"><span
                                        class="mail-logo"></span> Log Out</a>
                            </form>
                        </li>

                    </ul>

                </div>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="container user_dashbaord_container">
            <nav class=" bg-header navbar navbar-expand-md" style="margin-top: -45px;">
                <a class="navbar-brand" href="{{ url('/') }}"><span class="header-logo"><img
                            src="{{ asset('frontend/img/logo.png') }}" class="img-fluid logo-dashbaord" alt=""
                            srcset=""></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="{{ asset('frontend/img/menu-icon.png') }}"
                            width="25" height="18" alt=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-wrapper-one edit-profile-list">
                        {{-- @include('frontend.layouts.main_sub_menu') --}}
                        <li class="nav-item droplink  ">
                            <a class="nav-link nav-anchor mt-1" href="{{ route('grow') }}" aria-haspopup="true"
                                style="font-weight: bold">GROW <i class="fas fa-chevron-down droplink1"></i> <br> <span
                                    class="nav-sub-hed">Education</span></a>
                            <div class="subdrop subdrop1" aria-label="Main Links Sub Navigation">
                                <!-- <h2 class="nav-sub-hed">Education</h2> -->
                                <ul class="ewp-list">
                                    <li class="">
                                        <div class="edu-show1">
                                            <div class="vet-underline">
                                                <div class="sub-menu-flex">
                                                    <div class="flexrow1">
                                                        <!-- <u>Vet / Pet Professionals</u> -->
                                                        <ul>

                                                            <li><a href="{{ route('upcoming_webinars') }}">Upcoming Webinars</a></li>

                                  <li><a href="{{ route('videosOnDemand') }}">videos on demand</a></li>

                                                             <li><a href="#">Certificate & special programs</a></li>
                                                             <li><a href="{{route('forumsfrontend')}}">forums</a></li>
                                                             <li><a href="#">Pet Health Articles </a></li>

                                                        </ul>

                                                    </div>
                                                    <!-- <div class="flexrow1 pet-owner-ul"><u>Pet Owner</u>
                              <ul>
                                <li><a href="#">Upcoming Webinars</a></li>
                                <li><a href="#">Webinars on demand</a></li>
                                <li><a href="#">pet health articles</a></li>
                              </ul>
                            </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item droplink  ">
                            <a class="nav-link nav-anchor mt-1" href="{{ route('thrive') }}"
                                style="font-weight: bold">THRIVE <i class="fas fa-chevron-down droplink2"></i>
                                <br> <span class="nav-sub-hed">Wellness</span>
                            </a>

                            <div class="subdrop subdrop2" aria-label="Main Links Sub Navigation">

                                <ul class="wallnes-ul">
                                    <li><a href="">wellness Coaching for professionals</a></li>
                                    <li><a href="">wellness Wisdom</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item droplink ">
                            <a class="nav-link nav-anchor mt-1 pb-0" href="{{ route('heal') }}" style="font-weight: bold">HEAL
                                <i class="fas fa-chevron-down droplink3"></i>
                                <br>
                                <span class="nav-sub-hed">Pet Loss Support</span>
                            </a>

                            <div class="subdrop subdrop3" aria-label="Main Links Sub Navigation">

                                <ul style="display: inline-block;">

                                    <li><a href="">about Virtual pet loss support</a></li>
                                    <li><a href="">Schedule & Registration</a></li>
                                    <li><a href="">our Facilitators</a></li>
                                    <li><a href="">pet loss & grief Resources</a></li>
                                </ul>

                            </div>

                        </li>
                        {{-- <li class="nav-item droplink  ">
                            <a class="nav-link nav-anchor" href="{{ route('grow') }}" aria-haspopup="true"
                                style="font-weight: bold">GROW <i class="fas fa-chevron-down droplink1"></i> <br> <span
                                    class="nav-sub-hed">Education</span></a>
                            <div class="subdrop subdrop1" aria-label="Main Links Sub Navigation">
                                <!-- <h2 class="nav-sub-hed">Education</h2> -->
                                <ul class="ewp-list">
                                    <li class="">
                                        <div class="edu-show1">
                                            <div class="vet-underline">
                                                <div class="sub-menu-flex">
                                                    <div class="flexrow1">
                                                        <!-- <u>Vet / Pet Professionals</u> -->
                                                        <ul>

                                                            <li><a href="{{ route('upcoming_webinars') }}">Upcoming
                                                                    Webinars</a></li>

                                                            <li><a href="{{ route('videosOnDemand') }}">videos on
                                                                    demand</a></li>

                                                            <li><a href="#">Certificate & special programs</a></li>
                                                            <li><a href="{{ route('forumsfrontend') }}">forums</a>
                                                            </li>
                                                            <li><a href="#">Pet Health Articles </a></li>

                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item droplink  ">
                            <a class="nav-link nav-anchor" href="{{ route('thrive') }}"
                                style="font-weight: bold">THRIVE <i class="fas fa-chevron-down droplink2"></i>
                                <br> <span class="nav-sub-hed">Wellness</span>
                            </a>

                            <div class="subdrop subdrop2" aria-label="Main Links Sub Navigation">

                                <ul class="wallnes-ul">
                                    <li><a href="#">wellness Coaching for professionals</a></li>
                                    <li><a href="#">wellness Wisdom</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item droplink ">
                            <a class="nav-link nav-anchor" href="{{ route('heal') }}" style="font-weight: bold">HEAL
                                <i class="fas fa-chevron-down droplink3"></i>
                                <br>
                                <span class="nav-sub-hed">Pet Loss Support</span>
                            </a>

                            <div class="subdrop subdrop3" aria-label="Main Links Sub Navigation">

                                <ul style="display: inline-block;">

                                    <li><a href="#">about Virtual pet loss support</a></li>
                                    <li><a href="#">Schedule & Registration</a></li>
                                    <li><a href="#">our Facilitators</a></li>
                                    <li><a href="#">pet loss & grief Resources</a></li>
                                </ul>

                            </div>

                        </li> --}}

                        <li class="nav-item nav_res_3" style="text-align: center">
                            <a class="nav-link mm-editdb-text" href="{{ url('/chatify') }}"> <i
                                    class="fas fa-comment-dots mrg_top_edit"></i><br>
                                Messaging</a>
                        </li>
                        <li class="nav-item nav_res_3 d-flex" style="text-align: center">
                            <a class="nav-link mm-editdb-text a-position"
                                href="{{ route('vetvineUserNotifications') }}"> <i
                                    class="fas fa-bell mrg_top_edit"></i>
                                <span class="badge badge-danger a-ab" style="background: #f27222 !important;" id="countnotif">
                                    @php
                                        $counter = DB::table('notification_histories')->where(['user_id'=>Auth::user()->id, 'is_read'=>1])->count();
                                    @endphp
                                    @if ($counter)
                                        {{ $counter }}
                                    @else
                                    0
                                    @endif
                                   </span>

                                <br>
                                Notifications</a>
                        </li>
                        @php
                            $currentUser = vetvineHelper::currentUserProfile();
                        @endphp
                        <li class="nav-item nav_res_3" style="text-align: center">

                            <a class="nav-link padding_top_0" style="text-align: center"></a>

                            <div class="dropdown" id="dropdown-caret" style="padding: 0px 10px 0px 10px ">
                                <a class="btn btn-primary dropdown-toggle btn-ce padding_top_0 dropdown-cart"


                                type="button" data-toggle="dropdown" aria-expanded="true">
                                    <i class="employe">
                                        @if (Auth::user()->profile_photo)
                                            <img style="width: 30px; height:30px;"
                                                src="{{ asset('/frontend/images/Profile-Images/' . $currentUser->profile_photo) }}"
                                                alt="" id="user-image">
                                        @else
                                            <img style="width: 30px;"
                                                src="{{ asset('frontend/images/dummy.png') }}" alt=""
                                                id="user-image"">
                                        @endif

                                    </i><br>
                                    Me
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu  drop_down_user_dash btn_me3 pro-a">
                                    <li class="mb-4">
                                        <div class="content">
                                            <div class="img_box">
                                                @if (Auth::user()->profile_photo)
                                                    <img src="{{ asset('/frontend/images/Profile-Images/' . $currentUser->profile_photo) }}"
                                                        alt="" id="user-image">
                                                @else
                                                    <img src="{{ asset('frontend/images/dummy.png') }}"
                                                        alt="" id="user-image"">
                                                @endif
                                            </div>
                                            <div class="content_box">
                                                <b>{{ Auth::user()->name ?? '' }}</b>
                                                <a href="#"
                                                    class="view_profile" id="profileView">View Your Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('usermemberships.index') }}">Membership</a></li>
                                    <li><a href="{{ route('vetvineUserProfile') }}">Settings</a></li>
                                    {{-- <li><a href="#">Notification Preferences</a></li> --}}
                                    <li><a href="{{ route('change_password') }}">Change Password</a></li>
                                    <li>
                                        <a type="submit" class="show_confirm" data-id={{ Auth::id() }}>Delete
                                            Account</a>
                                    </li>

                                    {{-- <a href="javascript:void(0);" class="btn btn-primary dropdown-item"
                                    onclick="deleteRecord('{{ $forumpost->id }}', '/vetvine-member/forums-posts/')">Delete</a> --}}



                                    <li><a href="#">Help & Support</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item" style="text-align: center">

                            <a class="nav-link padding_top_0" href="contact.html"></a>
                            <div class="dropdown">
                                <button class=" dropdown-toggle btn-ce ce-toggle-btn" type="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="my-ce"><img
                                            src="{{ asset('frontend/img/featured-video-icon.png') }}"
                                            style="width:35px;"></i><br>
                                    My CE
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu my_ce_drop_down btn_me3">
                                    <li><a href="{{ route('member_home') }}"> Dashboard</a></li>
                                    <li><a href="#">CE Certificates / Documents</a></li>
                                    <li><a href="{{ route('myupcomming.events') }}">My Upcoming Events</a></li>
                                    <li><a href="{{ route('mypast.events') }}">My Past Events</a></li>
                                    <li><a href="#">Help & Support</a></li>
                                    {{-- <li><a href="#">Help & Support</a></li> --}}
                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>
            </div>
    </div>
</header>
@include('frontend.pages.general.contactus')
@include('common.deletemodal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
    <script type="text/javascript">

        var authUser = '<?php echo $authUser?>';
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('ul.dropdown-menu');
        $(document).ready(function() {
            $('#profileView').on('click', function(){
                console.log('hello');
                localStorage.setItem('eventUrl','');
                window.location.href="{{ route('vetvineUserProfile') }}";
            });
        });
        if (notificationsCount <= 0) {
            notificationsWrapper.hide();
        }

        var pusher = new Pusher('c1e77302d4c4ec349e3a', {
            cluster: 'ap2',
        });

        var channel = pusher.subscribe('my-channel');
        // console.log(channel);

        channel.bind('notification-event', function(data) {
            // return false;
            console.log(data);
            // if(data.userDesc){
            if(data.postUserId == authUser){
                $(data).each(function() {
                    var userId = data.userId;
                    var userName = data.userName;
                    var count = parseInt($("#countnotif").text());
                            count += 1;
                        $("#countnotif").html(count);
                });
            }
            // }else{
            //     console.log("No data found");
            // }
            // }
        });
    </script>
