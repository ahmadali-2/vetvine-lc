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
                <span>Forums
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
                                <label for="fav_Show" id="fav_show_label">Category</label>
                                <select name="fav_Show" id="fav_Show" class="filter-slect border select-m">
                                    <option title="" value="0" label="Select Category" selected></option>
                                    @foreach($categories as $category)
                                        <option title="{{$category->category_title}}" value="{{$category->id}}" label="{{$category->category_title}}">{{$category->category_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" style="visibility:hidden ;">dd</label>
                            <input id="category_search_field" type="text" placeholder="🔍 Search Here ....." class="form-control search_forum">
                        </div>
                    </div>


                    <div class="spci-title col-lg-3  col-md-3 d-flex justify-content-between pl-0 pr-0 text-center">

                        <div class="specialty-detail w-100">


                                <h2 class="text-center text-capitalize">Topics</h2>
                            </div>

                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="specialty-detail">
                            <h2 class="text-center text-capitalize">Recent Activity</h2>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div id="render-form-category-div">
                    @include('frontend.pages.forums.form_category_data')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
<script>
        $('#fav_Show').on('change',function(){
            filterFormCategory();
        });
        $('#category_search_field').on('keyup',function(){
            filterFormCategory();
        });
        function filterFormCategory(){
            var category = $('#fav_Show').val();
            var category_search_field = $('#category_search_field').val();
			$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			},
			type: "POST",
			url: '/search-form-category',
			data: {category: category, category_title_text: category_search_field},
			success: function(response){
                $('#render-form-category-div').empty();
                $('#render-form-category-div').append(response.html);
			}
			});
        }
</script>
@endsection
