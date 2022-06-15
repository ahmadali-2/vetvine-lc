@extends('frontend.master')
@section('content')
    <main>
        <section class="video-section-wrapper mb-4">
            <div class="container">
                <!-- <div class="filter-div category-div">
                      <div id="fav_show_wrapper">
                          <label for="fav_Show" id="fav_show_label">Category:</label>
                          <select name="fav_show" id="fav_show" class="filter-slect">
                              <option title="" value="" label=""></option>
                              <option title="Anesthesia" value="72" label="Anesthesia">Anesthesia</option>
                              <option title="Behavior" value="83" label="Behavior">Behavior</option>
                              <option title="Cardiology" value="49" label="Cardiology">Cardiology</option>
                              <option title="Dentistry" value="51" label="Dentistry">Dentistry</option>
                              <option title="Dermatology" value="31" label="Dermatology">Dermatology</option>
                              <option title="Emergency &amp; Critical Care" value="33" label="Emergency &amp; Critical Care">Emergency &amp; Critical Care</option>
                              <option title="Equine" value="71" label="Equine">Equine</option>
                              <option title="Euthanasia" value="92" label="Euthanasia">Euthanasia</option>
                              <option title="Evidence Based / Specialty Updates" value="84" label="Evidence Based / Specialty Updates">Evidence Based / Specialty Updates</option>
                              <option title="Human-Animal Bond" value="93" label="Human-Animal Bond">Human-Animal Bond</option>
                              <option title="Integrative Care &amp; Pain Management" value="85" label="Integrative Care &amp; Pain Management">Integrative Care &amp; Pain Management</option>
                              <option title="Internal Medicine - Small Animal" value="34" label="Internal Medicine - Small Animal">Internal Medicine - Small Animal</option>
                              <option title="Neurology" value="87" label="Neurology">Neurology</option>
                              <option title="Oncology" value="59" label="Oncology">Oncology</option>
                              <option title="Ophthalmology" value="36" label="Ophthalmology">Ophthalmology</option>
                              <option title="Parasitology" value="89" label="Parasitology">Parasitology</option>
                              <option title="Pet Owners" value="47" label="Pet Owners">Pet Owners</option>
                              <option title="Professional Development / Practice Management" value="38" label="Professional Development / Practice Management">Professional Development / Practice Management</option>
                              <option title="Surgery " value="55" label="Surgery ">Surgery </option>
                              <option title="Wildlife Conservation" value="91" label="Wildlife Conservation">Wildlife Conservation</option>
                          </select>
                      </div>
                      </div> -->



                {{-- comment --}}



                <h1 class="Upcoming-webinars mt-2">Videos on Demand</h1>
                <ul class="filter_list upcoming_filter">


                    <li class="top-three-input first_li">
                        <label>Search By :</label>
                        {{-- <input type="text" class=" form-control" name="name"> --}}
                    </li>

                    <li class="top-three-input">
                        <label>Title / Keyword</label>
                        <input type="text" class=" form-control title " name="title" id="title">
                    </li>
                    <li>
                        <div id="fav_show_wrapper mt-0">
                            <label for="category" id="category">Category:</label>
                            <select name="category" id="category_id" class="filter-slect category ">
                                <option value="" selected disabled>Select Category</option>
                                @forelse ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->category_title }}</option>
                                @empty
                                    <h5>No Category</h5>
                                @endforelse
                            </select>
                        </div>
                    </li>
                    <li class="top-three-input">
                        <label> Presenter </label>
                        <input type="text" class=" form-control presenter" name="presenter" id="presenter">
                    </li>
                    <li class="last_li">
                        <label>Sponsor</label>
                        <input type="text" class=" form-control sponser" name="sponser" id="sponser">
                    </li>
                    <li>
                        <button class="btn filter-searchBtn search_btn_hover" id="search" type="button">Search</button>
                    </li>
                </ul>
                <ul class="page-link-list">
                    {{-- <li @if (ROUTE::current()->uri == 'upcoming-webinars') class="active"  @endif>
               <a href="{{ route('upcoming_webinars') }}">Upcoming webinars</a>
            </li>
            <li @if (ROUTE::current()->uri == 'videos-on-demand') class="active"  @endif>
               <a href="{{ route('videosOnDemand') }}">ce/videos on demand</a>
            </li>

            <li @if (ROUTE::current()->uri == 'ce-archives') class="active"  @endif>
               <a href="{{ route('ceArchives') }}">ce archives</a>
            </li> --}}
                </ul>
                <div class="row mb-2">
                    <div class="col-md-4 ml-auto text-right">
                        <a href="" class="upcoming_view_all">View All >></a>
                    </div>
                </div>
                <div class="row w-100 video-cat-main m-0">
                    @forelse ($videos as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="video-box-main">
                                <div class="video-box">
                                    <iframe src="{{ $item->video_link }}" title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-bottom-text">
                                    <a class="video-title"
                                        href="{{ route('video_desc', [$item->id, $item->category_id]) }}">{{ $item->video_title }}

                                    </a>
                                    <div>
                                        <p>55 mins</p>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="video-bottom-description">
                                    <h5>02/17/2022</h5>
                                    <p><span>Presented by:</span> {{ $item->presented_by }}<br />
                                        <strong>Sponsored by:</strong> VetVine
                                    </p>
                                    <p class="para-decription">
                                        {{ $item->video_description }}
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5>No Data Found</h5>
                    @endforelse

                </div>
            </div>
        </section>
        @section('scripts')
            <script>
                $(document).ready(function() {
                    $("#search").click(function() {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('videos.search') }}",
                            type: 'post',
                            data: {
                                title: $("#title").val(),
                                category: $("#category_id").val(),
                                presenter: $("#presenter").val(),
                                sponser: $("#sponser").val(),
                            },
                            success: function(response){
                                console.table(response);
                            }
                        })
                    })
                })
            </script>
        @endsection
    @endsection
