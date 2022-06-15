@extends('frontend.master')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />
    <style>
        .forum_table button{
            background: transparent !important
        }
    </style>
@endsection
@section('content')
    <main>
        <section class="main_banner  forum_bg">
            <div class="container">
                <div class="flex-box-banner">
                    <div class="grow_banner_box grow_banner_box_web">
                        <div class="grow-heading">Forum </div>
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
                <span>Forums Posts
                </span>
            </h2>
        </div>
    </section>

    {{-- <section class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</section> --}}
    <section>
        <div class="container">
            <div class="row">


            <div class="col-md-3">
                <div class="filter-div category-div">
                    <div id="fav_show_wrapper show-d">



                        <select name="fav_show" id="fav_show" class="filter-slect mb-0 border-0 select-before">
                            <option title="" value="Matal" label=""></option>
                            <option title="Anesthesia" value="72" selected label="Anesthesia">Anesthesia</option>
                            <option title="Behavior" value="83" label="Behavior">Behavior</option>
                            <option title="Cardiology" value="49" label="Cardiology">Cardiology</option>
                            <option title="Neurology" value="87" label="Neurology">Neurology</option>
                            <option title="Oncology" value="59" label="Oncology">Oncology</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ml-auto text-right ">
                <a class="btn btn-primary post_btn " href="{{ route('createforumpost',$forumId ) }}">
                    Create Post
            </a>
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
                                 <th class="recent_activity">Recent Activity</th>

                             </tr>
                         </thead>






            {{-- start loop  --}}
        {{-- @dd($forums) --}}

        <tbody>


            @forelse ($posts as $forumpost )



            <tr>
                <td>    <a href="{{ route('getForumcategoryPosts',$forumpost->id) }}"><h4>{{ $forumpost->post_title ?? '' }}</h4></a> </td>

                <td>{{ $forumpost->comments->count('comments')}}</td>
                <td>{{ $forumpost->likes->sum('like')}}</td>
                <td>0</td>
                <td class="d-flex align-items-center"><img src={{ asset('frontend/forums/img/user.png') }}  class="mr-1" alt="">{{  date('M d ,Y', strtotime($forumpost->created_at)) }}</td>
                <td>
                    <button type="button dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('frontend/forums/img/dots.png') }}" alt="" >
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="box-shadow: 0px 0px 5px 0px rgb(84 84 84);">

                        <a class="btn btn-primary dropdown-item" href="{{ route('forums-posts.edit', $forumpost->id) }}">Edit</a>

                        <a href="javascript:void(0);" class="btn btn-primary dropdown-item"
                            onclick="deleteRecord('{{ $forumpost->id }}', '/vetvine-member/forums-posts/')">Delete</a>

                      </div>
                    <div class="col-sm-12 text-right" id="third">

                    </div>

                </td>
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

@section('scripts')
<script>

// function btnClicked(id){
//     console.log(id);
// }

    // const targetDiv = document.getElementById("toggle");
    // const btn = document.getElementById("toggle");
    // btn.onclick = function () {
    //   if (targetDiv.style.display !== "none") {
    //     targetDiv.style.display = "none";
    //   } else {
    //     targetDiv.style.display = "block";
    //   }
    // };
  </script>

@endsection



