@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')

<div class="chat_content">




    <div class="container">
        <div class="row">
            <div class="col-lg-3 left">
                <div class="box shadow-sm mb-3 rounded bg-white  text-center">
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
                    <div class="box-body p-0">

                        <div class="p-3 d-flex bg-light border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                            </div>
                            <div class="font-weight-bold mr-3 noti_parent">
                                <div class="text-truncate">DAILY RUNDOWN: WEDNESDAY</div>
                                <div class="content">
                                    <div class="content_img">
                                        <img src="{{ asset('frontend/img/feed-img-9.jpg') }}" alt="">
                                    </div>
                                    <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!</div>
                                </div>

                                <div class="comment mt-2">
                                    <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    </a> </div>
                                    <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                                </div>
                            </div>
                            <!-- <span class="ml-auto mb-auto">

                                <br />
                                <div class="text-right text-muted pt-1">3d</div>
                            </span> -->
                        </div>

                    </div>
                </div>




                <!-- earlier section start  -->
                <div class="box shadow-sm rounded bg-white mb-3 noti_parent ">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Earlier</h6>
                    </div>
                    <div class="box-body p-0">



                         <!-- row loop start  -->
                         <div class="row">
                           <div class="col-md-12">

                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="content">
                                  <div class="content_img">
                                      <img src="{{ asset('frontend/img/img-1.png') }}" alt="">
                                  </div>
                                  <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!

                                  </div>
                              </div>

                              <div class="comment mt-2">
                                  <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                  </a> </div>
                                  <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                              </div>
                          </div>
                          </div>

                        </div>
                      </div>


                         <div class="row">
                           <div class="col-md-12">

                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="content">
                                  <div class="content_img">
                                      <img src="{{ asset('frontend/img/feed-img-9.jpg') }}" alt="">
                                  </div>
                                  <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!

                                  </div>
                              </div>

                              <div class="comment mt-2">
                                  <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                  </a> </div>
                                  <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                              </div>
                          </div>
                          </div>

                        </div>
                      </div>


                         <div class="row">
                           <div class="col-md-12">

                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="content">
                                  <div class="content_img">
                                      <img src="{{ asset('frontend/img/img-1.png') }}" alt="">
                                  </div>
                                  <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!

                                  </div>
                              </div>

                              <div class="comment mt-2">
                                  <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                  </a> </div>
                                  <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                              </div>
                          </div>
                          </div>

                        </div>
                      </div>


                         <div class="row">
                           <div class="col-md-12">

                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="content">
                                  <div class="content_img">
                                      <img src="{{ asset('frontend/img/feed-img-9.jpg') }}" alt="">
                                  </div>
                                  <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!

                                  </div>
                              </div>

                              <div class="comment mt-2">
                                  <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                  </a> </div>
                                  <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                              </div>
                          </div>
                          </div>

                        </div>
                      </div>


                         <div class="row">
                           <div class="col-md-12">

                        <div class="p-3 d-flex  border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="content">
                                  <div class="content_img">
                                      <img src="{{ asset('frontend/img/img-1.png') }}" alt="">
                                  </div>
                                  <div class="small para_pad">Income tax sops on the cards, The bias in VC funding, and other top news for you Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolor repudiandae facere ut quos iste voluptatibus. Architecto incidunt excepturi fugit!

                                  </div>
                              </div>

                              <div class="comment mt-2">
                                  <div class="small mr-3"> <a href=""> <span>10</span>   <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                  </a> </div>
                                  <div class="small"> <a href=""> <span>3</span> <i class="fa fa-comments-o" aria-hidden="true"></i></a> </div>
                              </div>
                          </div>
                          </div>

                        </div>
                      </div>







                        <!-- row loop end  -->




                    </div>
                </div>

                <!-- pagination start  -->
                <div class="row parent_pagination_row">
                  <div class="col-md-12 text-right">
                    <nav aria-label="..."  class="d-flex justify-content-end">
                      <ul class="pagination">
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
                      </ul>
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
var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('i[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      var notifications          = notificationsWrapper.find('ul.dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsWrapper.hide();
      }
      // Enable pusher logging - don't include this in production
      // Pusher.logToConsole = true;

      var pusher = new Pusher('6e28b8146a38abf8bcc7', {
        cluster:'ap2',
        // encrypted: true
      });
    //   console.log(pusher);
      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('my-channel');
      console.log(channel);
      // Bind a function to a Event (the full Laravel class)
      channel.bind('notification-event', function(data) {
         console.log(data);

        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml =`
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.message+`</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        alert(newNotificationHtml)
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });
      </script>
@endsection
