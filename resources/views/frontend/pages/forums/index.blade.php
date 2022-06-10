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

    {{-- ============================================================================ --}}
    {{-- NEW FORUMS SECTION --}}
    <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>Forums Category
                </span>
            </h2>
        </div>
    </section>

    <section>
        <div class="specialty-topics">
            <div class="container forum_top_section">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-3">
                        <div class="filter-div category-div forum_category_div">
                            <div id="fav_show_wrapper">
                                <label for="fav_Show" id="fav_show_label">Category:</label>
                                <select name="fav_show" id="fav_show" class="filter-slect border select-m">
                                    <option title="" value="" label=""></option>
                                    <option title="Anesthesia" value="72" label="Anesthesia">Anesthesia</option>
                                    <option title="Behavior" value="83" label="Behavior">Behavior</option>
                                    <option title="Cardiology" value="49" label="Cardiology">Cardiology</option>
                                    <option title="Dentistry" value="51" label="Dentistry">Dentistry</option>
                                    <option title="Dermatology" value="31" label="Dermatology">Dermatology</option>
                                    <option title="Emergency &amp; Critical Care" value="33"
                                        label="Emergency &amp; Critical Care">Emergency &amp; Critical Care</option>
                                    <option title="Equine" value="71" label="Equine">Equine</option>
                                    <option title="Euthanasia" value="92" label="Euthanasia">Euthanasia</option>
                                    <option title="Evidence Based / Specialty Updates" value="84"
                                        label="Evidence Based / Specialty Updates">Evidence Based / Specialty Updates
                                    </option>
                                    <option title="Human-Animal Bond" value="93" label="Human-Animal Bond">Human-Animal Bond
                                    </option>
                                    <option title="Integrative Care &amp; Pain Management" value="85"
                                        label="Integrative Care &amp; Pain Management">Integrative Care &amp; Pain
                                        Management</option>
                                    <option title="Internal Medicine - Small Animal" value="34"
                                        label="Internal Medicine - Small Animal">Internal Medicine - Small Animal</option>
                                    <option title="Neurology" value="87" label="Neurology">Neurology</option>
                                    <option title="Oncology" value="59" label="Oncology">Oncology</option>
                                    <option title="Ophthalmology" value="36" label="Ophthalmology">Ophthalmology</option>
                                    <option title="Parasitology" value="89" label="Parasitology">Parasitology</option>
                                    <option title="Pet Owners" value="47" label="Pet Owners">Pet Owners</option>
                                    <option title="Professional Development / Practice Management" value="38"
                                        label="Professional Development / Practice Management">Professional Development /
                                        Practice Management</option>
                                    <option title="Surgery " value="55" label="Surgery ">Surgery </option>
                                    <option title="Wildlife Conservation" value="91" label="Wildlife Conservation">Wildlife
                                        Conservation</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" style="visibility:hidden ;">dd</label>
                            <input type="text" placeholder=" 🔍 Search Here ....." class="form-control search_forum">
                        </div>
                    </div>


                    <div class="spci-title col-lg-3  col-md-3 d-flex justify-content-between pl-0 pr-0 text-center">

                        <div class="specialty-detail w-100">


                            <h2 class="text-center text-capitalize ">Topics</h2>
                        </div>

                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="specialty-detail">
                            <h2 class="text-center text-capitalize ">Recent Activity</h2>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                @forelse ($categories as $category)
                    <div class="specialty-info">

                        <div class="topics-section col-lg-12 ">
                            <div class="behavior-card col-lg-6 col-md-6">
                                <div class="behavior-img"><img src="{{ asset('frontend/forums/img/heal-icon-1.png') }}"
                                        alt="behavior img"></div>
                                <div class="behavior-details ">
                                    <div class="behavior-title">
                                        <a href="{{ route('getForums', $category->id) }}">
                                            <h2 class="uppercase">{{ $category->category_title ?? '' }}</h2>
                                        </a>
                                    </div>

                                    <p class="forum_desc">Description

                                    </p>



                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="date-ms  col-lg-6 col-md-6 col-sm-6 max_width_screen">
                                        <div class="behavior-card-right  text-center comment_forum">
                                            <div class="behavior-img-2">
                                                <p class="topi">Topics</p>
                                                <div class="combine">
                                                    <img src="{{ asset('frontend/forums/img/message.png') }}"
                                                        alt="behavior img"><span>34</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="date-ms  col-lg-6 col-md-6 col-sm-6 max_width_screen">

                                        <div class="behavior-card-right  text-center comment_forum combine_2">
                                            <p class="topi">Recent Activity</p>
                                            <div class="behavior-img-2"><span>Nov 22, 2021</span></div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                @empty
                    <h3>Not Found!</h3>
                @endforelse



            </div>
        </div>
    </section>



    {{-- ============================================================================ --}}

    {{-- <section class="main_banner_bottob_label"></section>

    <section class="become_member_area">
        <div class="container">
            <h2>
                <span>Forums
                </span>
            </h2>
        </div>
    </section>
    <section>
        <div class="specialty-topics">
            <div class="container">
                <div class="specialty-info">
                    <div class="search-feild float-right">
                        <input type="search" required>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>

                        <div class="specialty-detail">
                            <h2>{{ $category->category_title }}</h2>
                        </div>
                        @foreach ($category->forums as $forum)
                            <div class="topics-section">
                                <div class="behavior-card col-lg-6">
                                    <div class="behavior-img"><img
                                            src="{{ asset('frontend/forums/img/forum-pic-1.png') }}" alt="behavior img">
                                    </div>
                                    <div class="behavior-details ">
                                        <div class="behavior-title">
                                            <a href="{{ route('forumpostlist', $forum->id) }}">
                                                <h2>{{ $forum->forum_title }}</h2>
                                            </a>
                                        </div>
                                        <div class="behavior-description">
                                            <div class="file">

                                                <p>Posts</p>
                                            </div>
                                            <div class="latter-box">
                                                <img src="{{ asset('frontend/forums/img/later-box-icon.png') }}" alt="">
                                                <p>{{ $forum->posts->count() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="behavior-card-right col-lg-6">
                                    <div class="behavior-img-2"><img
                                            src="{{ asset('frontend/forums/img/forum-pic-2.png') }}" alt="behavior img">
                                    </div>
                                    <div class="behavior-details-right ">
                                        <p class="behavior-card-description">Last reply by VetVine CE in Child-Dog Safety
                                            Resources
                                        </p>
                                        <p class="date">{{ $forum->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                    <div class="page-num col-lg-7">
                        <ul>
                            <li><a href="#">previous</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>

    </section> --}}

    {{-- <section>
    <div class="container">
        <div class="advertising-sec">
            @if (isset($ads[0]->banner_image_url))
            <a href="{{ $ads[0]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[0]->ad_media) }}" alt=""></div>
            </a>
            @else

            @endif
            @if (isset($ads[1]->banner_image_url))
            <a href="{{ $ads[1]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[1]->ad_media) }}" alt=""></div>
            </a>
            @else

            @endif
            @if (isset($ads[2]->banner_image_url))
            <a href="{{ $ads[2]->banner_image_url}}" target="_blank">
                <div class="advertising-img-1"><img src="{{ asset('admin/advertisement/' . $ads[2]->ad_media) }}" alt=""></div>
            </a>

            @else

            @endif
        </div>
    </div>
</section> --}}
@endsection
