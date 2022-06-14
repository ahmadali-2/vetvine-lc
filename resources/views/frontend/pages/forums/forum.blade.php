@extends('frontend.master')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
@endsection
@section('content')
    <main>
        <section class="main_banner  forum_bg">
            <div class="container">
                <div class="flex-box-banner">
                    <div class="grow_banner_box grow_banner_box_web">
                        <div class="grow-heading">Forum</div>
                        <img src="{{ asset('frontend/forums/img/sep-line-2.jpg') }}" width="250" height="2" alt=""
                            class="line_image">
                        <p class="mb-0">A BETTER LIFE FOR ANIMALS AND THE HUMANS
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </main>
{{-- @dd($forums) --}}
    {{-- ============================================================================ --}}
    {{-- NEW FORUMS SECTION --}}
    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>Forums
                </span>
            </h2>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="col-md-3">
                <div class="filter-div category-div">
                    <div id="fav_show_wrapper show-d">

                        <select name="fav_show" id="fav_show" class="filter-slect border select-m">
                            <option title="" value="" label=""></option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->category_title }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">



                     <table class="table  forum_table table-bordered" >
                         <thead>
                             <tr>
<th class="title_th" width="50%"></th>

                                 <th><img src="{{ asset('frontend/forums/img/message.png')}}" alt="behavior img"></th>
                                 <th><img src="{{ asset('frontend/forums/img/heart.png') }}" alt=""></th>
                                 <th><img src="{{ asset('frontend/forums/img/view.png') }}" alt=""></th>
                                 <th class="recent_activity text-capitalize">Recent Activity</th>

                             </tr>
                         </thead>






            {{-- start loop  --}}
        {{-- @dd($forums) --}}

        <tbody>

            {{-- @dd($forums) --}}

            @forelse ($forums as $forum )
            <tr>
                <td><a href="{{ route('getForumPosts',$forum->id) }}"><h4>{{ $forum->forum_title ?? '' }}</h4></a> </td>
                <td>{{ $forum->posts->count() }}</td>
                <td> {{ $forum->likecount->sum('like')}}</td>
                <td>0</td>
                <td class="d-flex align-items-center"><img src={{ asset('frontend/forums/img/user.png') }}  class="mr-1" alt="">{{ date('M d ,Y', strtotime($forum->created_at)) }}</td>
                <td><img src="{{ asset('frontend/forums/img/dots.png') }}" alt=""></td>
            </tr>

            @empty
               <h3>Not Found</h3>
            @endforelse

        </tbody>
    </table>




            {{-- end loop row  --}}

        </div>
    </div>
</div>

    </section>


@endsection
