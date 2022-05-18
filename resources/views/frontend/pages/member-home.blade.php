@extends('frontend.master')
@section('content')
<!-- member home start -->
<section>
    <div class="member-home">
      <div class="container">
        <div class="generic_layout-main">
          <div class="generic_layout_left">
            <div class="user-profile">
              <h3>Welcome Colleague!</h3>
              <div class="profile-img">
                 {{-- <img src="{{ asset('frontend/img/user_thumb_profile.png')}}" alt=""> --}}
              </div>
            </div>
            <div class="quicky-link">
              <div class="user-link">
                <ul>
                  <li><div class="icon"><img src="{{ asset('frontend/img/search.png')}}" alt=""></div>
                  Browse Members</li>
                  <li>
                    <div class="icon"><img src="{{ asset('frontend/img/invite.png')}}" alt=""></div>
                    Invite your Colleagues
                  </li>
                  <li>
                     <div class="icon"><img src="{{ asset('frontend/img/socialdna.png')}}" alt=""></div>
                    My Social DNA
                  </li>
                </ul>
              </div>
            </div>
            <div class="upcoming-CE">
              <h3>Upcoming CE</h3>
              <ul>
                <li>
                  <div class="list-details">
                    <div class="img"><img src="{{ asset('frontend/img/upcoming-ce.jpg')}}" alt=""></div>
                    <div class="description"><p >Common and uncommon diseases in horses t..</p></div>
                  </div>
                </li>
                <li>
                  <a href="">More CE events</a>
                </li>
              </ul>
            </div>

            <div class="News-sources">
                <h3>News Sources</h3>
                @foreach ($news as $new)
                <marquee behavior="" direction="up" >
                    <a href="{{$new->news_link}}">
                        <p>{{$new->news_title}}</p>
                    </a>
                </marquee>
                @endforeach
              </div>
          </div>
          <div class="generic_layout_middle">
            <h3>What's Buzzing</h3>
            <div class="activty-post">
              <p>post something</p>
            </div>
            <div class="activty-feed">
              <ul>
                  @foreach ($posts as $post)
                <li>
                  <div class="feed-photo">
                    <img src="@if($post->user->profile_photo) {{ asset('/frontend/images/Profile-Images/'.$post->user->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" alt="feed 1 pic">
                      {{-- <img src="{{ asset('frontend/img/feed-img-1.png')}}" alt="feed 1 pic"> --}}
                    </div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">{{$post->user->name}}</a> posted a <a href="">topic</a> in the forum <a href="">testing forum</a>:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">{{$post->post_title}}</a></span>
                    <p>{!! $post->post_description !!}</p>
                  </div>
                  <div class="feed-comment">
                    <img src="{{ asset('frontend/img/post.png')}}" alt="post icon">
                    <p>{{ $post->created_at->format('d M Y') }} <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>
                  <div class="comment">
                    <div class="comment-photo"><img src="{{ asset('frontend/img/feed-img-2.jpeg')}}" alt=""></div>
                    <div class="comment-info">
                  <div class="comment-aurther"><p><span><a href="">Tayyab Hassan</a></span> tesing comment</p></div>
                  <div class="comment-description"><p>Mon at 3:00 AM - <a href="">like</a></p></div>
                </div>
                  </div>

                </div>
                </li>
                @endforeach
                 {{-- <li>
                  <div class="feed-photo"><img src="img/feed-img-2.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><span><a href="">Tayyab Hassan</a> posted a <a href="">topic</a> in the forum <a href="">testing forum</a>:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Tetsing 2</a></span>
                    <p>Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2Testing 2</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/post.png" alt="post icon">
                    <p>Mon at 2:23 AM - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>
                </div>
                </li>
                 <li>
                  <div class="feed-photo image-3"><img class="" src="img/feed-img-3.png" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">sywyz</a> shared  <a href="">VetVine CE's item.</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Overall Rating: 4.4 / 5</a></span>

                  </div>
                  <div class="feed-comment">

                    <p>March 31 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo image-3"><img src="img/feed-img-3.png" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Allen Sawyer</a> shared <a href="">Tayyab Hassan's item.</a> testing</p>
                  </div>

                  <div class="feed-testing">
                    <span><a href="">Aut qui doloremque l</a>
                      <p>Suscipit maxime rem</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/cmspage.png" alt="post icon">
                    <p>March 17 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-2.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Tayyab Hassan </a> posted a new Continuing Education item:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Atque mollit id non</a></span>
                    <p>Molestiae odio qui l</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/list.png" alt="post icon">
                    <p>January 18 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-2.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">


                    <div class="feed-items-details">
                    <p><a href="">Tayyab Hassan</a> posted a new page:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Aut qui doloremque l</a></span>
                    <p>Suscipit maxime rem</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/cmspage.png" alt="post icon">
                    <p>January 7  - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-4.jpg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Michelle Black</a></p>
                  </div>
                  <div class="feed-testing">
                    <img src="img/feed-img-5.jpg" alt="">
                  </div>
                  <div class="feed-comment">
                    <img src="img/post.png" alt="post icon">
                    <p>Mon at 2:31 AM - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>
                  <div class="comment-aurther img-8-com"><p><span><a href="">Michelle Black</a></span> and <a href="">sywyz</a> like this.</p></div>
                  <div class="comment">
                    <div class="comment-photo"><img src="img/feed-img-8.jpg" alt=""></div>
                    <div class="comment-info">
                  <div class="comment-aurther"><p><span><a href="">Michelle Black</a></span> this is awesome</p></div>
                  <div class="comment-description"><p>January 6 - <a href="">like</a></p></div>
                </div>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-2.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Tayyab Hassan</a> posted a new Continuing Education item:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Testing Listing event</a></span>
                    <p>Some description about testing event or listing</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/list.png" alt="post icon">
                    <p>January 4 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-4.jpg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Michelle Black</a> shared <a href="">VetVine CE's listing.</a> hkjhkj</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Acute and Chronic Pain Management</a></span>
                    <p>This package includes 2 publications: 1) Acute Pain Management: A Case-Based Approach - Handbook of Veterinary Pain Management (Third Edition), Chapter 22, 2015, Pages 444-471. Authors: James S. Gaynor, William W. Muir III and 2) Chronic Pain Cases -...</p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/list.png" alt="post icon">
                    <p>December 29, 2021 - <a href="">Like</a> - <a href=""> Comment </a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-6.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">

                    <div class="feed-items-details">
                    <p><a href="">VetVine CE</a>  posted a review on the event:<a href="">The Loss of a Service Dog Through Death or Retirement: Experiences and Impact on Handlers and the Important Role of Veterinary Professionals</a></p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Overall Rating: 4.4 / 5</a></span>

                  </div>
                  <div class="feed-comment">
                    <img src="img/review.png" alt="post icon">
                    <p>November 30, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>


                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-6.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">VetVine CE</a> posted a <a href="">topic</a> in the forum <a href="">Pet Health Pearls</a>:</p>
                  </div>

                  <div class="feed-testing">
                    <span><a href="">Service Dog Loss Through Retirement and Death</a></span>
                    <p>Service dog handlers and their service dogs have a unique and profound relationship. Numerous studies have identified how service dogs positively impact people with disabilities, including the ability to foster socialization and community participa...  <a href="">more</a></p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/post.png" alt="post icon">
                    <p>November 24, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-6.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">VetVine CE</a> posted a new Continuing Education item:</p>
                  </div>
                  <div class="feed-testing testing-2">
                    <img src="img/feed-img-9.jpg" alt="">
                   <div class="feed-testing-details">
                      <span><a href="">Common and uncommon diseases in horses that have a nutrition or nutritional management cause or component</a></span>
                    <p>This is the fourth of a 4-part series on feeding the horse, presented by internationally recognized and leading equine nutrition consultant Dr. Steve Jackson. In this segment the focus will turn to the impacts of nutrition - from deficiency to excess o...</p>
                   </div>
                  </div>
                  <div class="feed-comment">
                    <img src="img/list.png" alt="post icon">
                    <p>November 13, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-6.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">VetVine CE</a> posted a <a href="">topic</a> in the forum <a href="">Pet Health Pearls</a>:</p>
                  </div>

                  <div class="feed-testing">
                    <span><a href="">Dog and Baby / Toddler Safety Program</a></span>
                    <p>Is "let them sniff the blanket" sufficient advice to provide to someone if asked how to successfully introduce a new baby to the family dog? No, it's not enough! Th...  <a href="">more</a></p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/post.png" alt="post icon">
                    <p>November 9, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-6.jpeg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">VetVine CE</a>posted a review on the event: <a href="">How to establish THC diagnosis in the emergency room</a></p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Overall Rating: 4.8 / 5 stars</a></span>

                  </div>
                  <div class="feed-comment">
                    <img src="img/review.png" alt="post icon">
                    <p>September 22, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li>
                 <li>
                  <div class="feed-photo"><img src="img/feed-img-7.jpg" alt="feed 1 pic"></div>
                  <div class="feed-body">
                    <div class="feed-items-details">
                    <p><a href="">Sheri Berger</a> posted a <a href="">topic</a> in the forum <a href="">Off-Topic Discussions:</a>:</p>
                  </div>
                  <div class="feed-testing">
                    <span><a href="">Know better. Do better.</a></span>
                    <p>Over the past couple of years I’ve had the real honor of working with colleagues and industry experts to produce and host a number of educational offerings on end-of-life topics. It’s been a very enlightening experience. I also have a heartfel...  <a href="">more</a></p>
                  </div>
                  <div class="feed-comment">
                    <img src="img/post.png" alt="post icon">
                    <p>June 21, 2021 - <a href="">Like</a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
                  </div>

                </div>
                </li> --}}

              </ul>
              <div class="veiw-more">
                  <img src="{{ asset('frontend/img/viewmore.png')}}" alt="">
                  <a href="">View More</a>
                </div>
            </div>
          </div>
          <div class="generic_layout_right">
      <div class="right-block-img">
  <div class="advertising-img-1"><img src="{{ asset('frontend/img/add-1.png')}}" alt=""></div>
  <div class="advertising-img-2"><img src="{{ asset('frontend/img/visbio.png')}}" alt=""></div>

</div>


          </div>
        </div>
      </div>
    </div>
  </section>

<!-- member home end -->
@endsection
