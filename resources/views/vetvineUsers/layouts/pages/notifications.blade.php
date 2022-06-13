@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
    <div class="chat_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 left">
                    <div class="box shadow-sm mb-3 rounded bg-white  text-center">
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
                        <div class="box-body p-0" id="notif-board">
                            {{-- @foreach ($notifications as $notification) --}}
                                <div class="notification p-3 d-flex bg-light border-bottom osahan-post-header">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ asset('frontend/images/Profile-Images/' . $notification->user->profile_photo) }}"
                                            alt="" />
                                    </div>
                                    <div class="font-weight-bold mr-3 noti_parent">
                                        <div class="post-title" class="text-truncate">
                                            {{ $notification->posts->post_title }}</div>
                                        <div class="content">
                                            <div class="content_img">
                                                <img class="profile-img"
                                                    src=""
                                                    alt="">
                                            </div>
                                            <div class="small para_pad"></div>
                                        </div>

                                        {{-- <div class="comment mt-2">
                                            <div class="small mr-3"> <a href=""> <span>{{ $count_likes }}</span> <i
                                                        class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                </a> </div>
                                            <div class="small"> <a href=""> <span>3</span> <i
                                                        class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                                        </div> --}}
                                    </div>
                                </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <!-- pagination start  -->
                    <div class="row parent_pagination_row">
                        <div class="col-md-12 text-right">
                            <nav aria-label="..." class="d-flex justify-content-end">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- pagination end  -->

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

            var pusher = new Pusher('6e28b8146a38abf8bcc7', {
                cluster: 'ap2',
            });

            var channel = pusher.subscribe('my-channel');

            channel.bind('notification-event', function(data) {
                // console.log(data);
                $(data).each(function() {
                    var postDesc = data.userDesc;
                    var postTitle = data.postTitle;
                    var userPhoto = data.userPhoto;
                    var postImg = data.postImg;
                    var desc = $(postDesc).text();
                    var img = "{{ asset('vetvineUsers/posts') }}" + '/' + postImg;
                    var profileImg = "{{ asset('frontend/images/Profile-Images') }}" + '/' + userPhoto;
                    var likes = data.likes;
                    var html = $(`
                <div class="notification p-3 d-flex bg-light border-bottom osahan-post-header">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="` + profileImg + `"
                                            alt="" />
                                    </div>
                                    <div class="font-weight-bold mr-3 noti_parent">
                                        <div class="post-title" class="text-truncate">` + postTitle + `</div>
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
                    $("#notif-board").append(html);
                })
                var count = parseInt($("#countnotif").text());
                count += 1;
                $("#countnotif").html(count);
            });
        </script>
    @endsection
