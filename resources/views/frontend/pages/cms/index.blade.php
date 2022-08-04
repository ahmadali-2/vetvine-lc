@extends('frontend.master')
@section('content')
    {{-- <main>
    <section class="main_banner heal_banner_box_web ">
      <div class="container">
        <div class="flex-box-banner">
          <div class="grow_banner_box grow_banner_box_web">
            <div class="grow-heading">Terms And Conditions
            </div> <img src="{{ asset('frontend/images/sep-line-2.jpg')}}" width="250" height="2" alt="" class="line_image">

            <p>Honor that special animal and friend
              who left a forever mark on your heart.</p>
          </div>
        </div>

      </div>
    </section>
  </main> --}}

    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area privacy_policy">
        <div class="container">
            <h2 class="pet-loss-text">
                <span>{{ $content->title }}</span>
            </h2>
            <div class="row">
                <div class="col-sm-12 text-left">
                    {{-- <div class="title">Title of Post</div> --}}
                    <div class="content">
                        {!! $content->content !!}
                    </div>
                </div>
            </div>
    </section>
@endsection
