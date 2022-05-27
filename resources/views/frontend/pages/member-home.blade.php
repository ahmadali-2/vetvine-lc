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
                <img src="@if(Auth()->user()->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/'.Auth()->user()->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" alt="">
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
                    {{ $post->id}}
                  <div class="feed-photo">
                    <img src="@if($post->user->profile_photo ?? '') {{ asset('/frontend/images/Profile-Images/'.$post->user->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" alt="feed 1 pic">
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
                  {{-- @php
                        $likedpost  =   Auth::user()->likes()->where('post_id',$post->id)->first();
                  @endphp --}}
                  <div class="feed-comment">
                    <img src="{{ asset('frontend/img/post.png')}}" alt="post icon">
                    <p>{{ $post->created_at->format('d M Y') }}
                    <a href="javascript:void(0)" class="like" id="like" data-post-id="{{$post->id}}" data-user-id="{{Auth::user()->id}}">
                       {{$post->isAuthUserLikedPost() ? 'Liked' : 'Like' }}
                    </a> - <a href=""> Comment </a> - <a href="">Share</a> </p>
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
@section('scripts')
<script>
$(document).ready(function(e){
    $(".like").on("click",function(e){
        e.preventDefault();
        var postid  = $(this).attr('data-post-id');
        var userid  = $(this).attr('data-user-id');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
           url:"{{route('likesave')}}",
           method:'POST',
           data:{
                  likeuserid:userid,
                  likepostid:postid
                },
           success:function(response){
               console.log(response.like.like);
               if (response.like.like = 1 || $('#like').html() == "Like")
               {
                $("#like").html("Liked");
               }
               else if(response.like.like = 0 || $('#like').html() == "Liked")
               {

                $("#like").html("Like");
               }
           },
           error:function(error){
              console.log(error)
           }
        });

    })
})
</script>
@endsection
