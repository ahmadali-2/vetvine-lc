@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
    <?php
    $authUser = Auth::user()->id;
    ?>
    <div class="edit-profile-header edit_profile_banner">

    </div>


    <!-- notifications content start  -->
    <div class="chat_content">




        <div class="container">
            <div class="row">
                <div class="col-lg-3 left">
                    <div class="box shadow-sm mb-3 rounded bg-white text-center">
                        <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid" alt="Responsive image" /> -->
                        <div class="p-3 border-bottom">
                            <h6 class="font-weight-bold text-dark">Notifications</h6>
                            <p class="mb-0 text-muted">You’re all caught up! Check back later for new notifications</p>
                        </div>
                        <div class="p-3">
                            <p class="text-muted">Improve Your Notifications</p>
                            <button type="button" class="btn btn-outline-danger btn-sm pl-4 pr-4">View settings</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 right">
                    <div class="box shadow-sm rounded bg-white mb-3">
                        <div class="box-title border-bottom p-3">
                            <h6 class="m-0">Recent</h6>

                        </div>

                        <div class="box-body p-0" id="notification-card">
                            {{-- <div class="p-3 d-flex bg-light border-bottom osahan-post-header">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                        alt="" />
                                </div>
                                <div class="font-weight-bold mr-3 noti_parent">
                                    <div class="text-truncate">DAILY RUNDOWN: WEDNESDAY</div>
                                    <div class="content">
                                        <div class="content_img">
                                            <img src="{{ asset('frontend/img/feed-img-9.jpg') }}" alt="">
                                        </div>
                                        <div class="small para_pad">Income tax sops on the cards, The bias in VC funding,
                                            and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto
                                            incidunt excepturi fugit!</div>
                                    </div>

                                    <div class="comment mt-2">
                                        <div class="small mr-3">
                                            <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="small">
                                            <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}

                        </div>
                    </div>




                    <!-- earlier section start  -->

                    <div class="box shadow-sm rounded bg-white mb-3 noti_parent ">
                        <div class="box-title border-bottom p-3">
                            <h6 class="m-0">Earlier</h6>
                        </div>
                        <div class="box-body p-0">
                            <!-- row loop start  -->
                            @foreach ($notifications as $notification)
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                                            @if ($notification->actionBy->profile_photo)
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                src="{{ asset('frontend/images/Profile-Images/' . $notification->actionBy->profile_photo) }}"
                                                alt="" />
                                            </div>
                                            @else
                                            <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle"
                                                src="{{ asset('frontend/images/dummy.png') }}" alt=""
                                                id="user-image">
                                            </div>
                                            @endif

                                            <div class="font-weight-bold mr-3">
                                                <div class="text-truncate">{{ $notification->post->post_title }}: {{ $notification->action }}
                                                    {{ $notification->actionBy->name }}</div>
                                                <div class="content">
                                                    <div class="content_img">
                                                        <img src="{{ asset('vetvineUsers/posts/' . $notification->post->post_photo) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="small para_pad">
                                                        {{-- {!! $notification->post->post_description !!} --}}
                                                        {!! Str::limit($notification->post->post_description, 160) !!}
                                                    </div>
                                                </div>

                                                {{-- <div class="comment mt-2">
                                                    <div class="small mr-3">
                                                        <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <div class="small">
                                                        <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="row">
                                <div class="col-md-12">

                                    <div class="p-3 d-flex  border-bottom osahan-post-header">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                        </div>
                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                            <div class="content">
                                                <div class="content_img">
                                                    <img src="{{ asset('frontend/img/feed-img-9.jpg') }}" alt="">
                                                </div>
                                                <div class="small para_pad">Income tax sops on the cards, The bias in VC
                                                    funding, and other top news for you Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut
                                                    quos iste voluptatibus. Architecto
                                                    incidunt excepturi fugit!

                                                </div>
                                            </div>

                                            <div class="comment mt-2">
                                                <div class="small mr-3">
                                                    <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="small">
                                                    <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="p-3 d-flex  border-bottom osahan-post-header">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                        </div>
                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                            <div class="content">
                                                <div class="content_img">
                                                    <img src="{{ asset('frontend/img/feed-img-9.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="small para_pad">Income tax sops on the cards, The bias in VC
                                                    funding, and other top news for you Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut
                                                    quos iste voluptatibus. Architecto
                                                    incidunt excepturi fugit!

                                                </div>
                                            </div>

                                            <div class="comment mt-2">
                                                <div class="small mr-3">
                                                    <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="small">
                                                    <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="p-3 d-flex  border-bottom osahan-post-header">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                        </div>
                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                            <div class="content">
                                                <div class="content_img">
                                                    <img src="{{ asset('frontend/img/feed-img-9.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="small para_pad">Income tax sops on the cards, The bias in VC
                                                    funding, and other top news for you Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut
                                                    quos iste voluptatibus. Architecto
                                                    incidunt excepturi fugit!

                                                </div>
                                            </div>

                                            <div class="comment mt-2">
                                                <div class="small mr-3">
                                                    <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="small">
                                                    <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="p-3 d-flex  border-bottom osahan-post-header">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                        </div>
                                        <div class="font-weight-bold mr-3">
                                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                            <div class="content">
                                                <div class="content_img">
                                                    <img src="{{ asset('frontend/img/feed-img-9.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="small para_pad">Income tax sops on the cards, The bias in VC
                                                    funding, and other top news for you Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut
                                                    quos iste voluptatibus. Architecto
                                                    incidunt excepturi fugit!

                                                </div>
                                            </div>

                                            <div class="comment mt-2">
                                                <div class="small mr-3">
                                                    <a href=""> <span>10</span> <i class="fa fa-thumbs-up"
                                                            aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="small">
                                                    <a href=""> <span>3</span> <i class="fa fa-comments-o"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                            <!-- row loop end  -->
                        </div>
                    </div>

                    <!-- pagination start  -->
                    <div class="row parent_pagination_row">
                        <div class="col-md-12 text-right">
                            <nav aria-label="..." class="d-flex justify-content-end">
                                {{-- <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul> --}}
                                {{ $notifications->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- pagination end  -->
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/add-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://js.pusher.com/7.1/pusher.min.js"></script>
    <script type="text/javascript">
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('ul.dropdown-menu');

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
            $(data).each(function() {
                var userId = data.userId;
                var postDesc = data.userDesc;
                var postTitle = data.postTitle;
                var userPhoto = data.userPhoto;
                var userName = data.userName;
                var postImg = data.postImg;
                var postUserId = data.postUserId;
                var authUser = '<?php echo $authUser; ?>';
                var desc = $(postDesc).text();
                var img = "{{ asset('vetvineUsers/posts') }}" + '/' + postImg;
                var profileImg = "{{ asset('frontend/images/Profile-Images') }}" + '/' + userPhoto;
                // var likes = data.likes;
                console.log(postUserId);
                console.log(authUser);

                if (postUserId == authUser) {
                    if (data.actionType) {
                        var html = $(`
                                    <div class="notification p-3 d-flex bg-light border-bottom osahan-post-header">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="` + profileImg + `"
                                            alt="" />
                                    </div>
                                    <div class="font-weight-bold mr-3 noti_parent">
                                        <div class="post-title" class="text-truncate">` + postTitle + `: `+data.actionType+` By ` + userName + `</div>
                                        <div class="content">
                                            <div class="content_img">
                                                <img class="profile-img" src="` + img + `"
                                                    alt="">
                                            </div>
                                            <div class="small para_pad">` + desc + `</div>
                                        </div>
                                    </div>
                                </div>
                                `);
                        $("#notification-card").append(html);
                    }
                    // var count = parseInt($("#countnotif").text());
                    // count += 1;
                    // $("#countnotif").html(count);
                }
            })
            // }else{
            //     console.log("No data found");
            // }
            // }
        });
    </script>
@endsection
