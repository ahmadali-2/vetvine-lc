@extends('frontend.master')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('frontend/forums/css/style.css') }}" />

@endsection
@section('content')
<style>
    .video-section-wrapper {
    width: 100%;
    display: inline-block;
    border-top: 1px solid #fff !important;
    /* padding-top: 23px; */
}
</style>


<section class="news_banner" style="background-image: url('{{asset('frontend/images/news_banner.png')}}');">
    <div class="container">
        <div class="flex-box-banner">
            <div class="grow_banner_box grow_banner_box_web">
                <div class="grow-heading mt-lg-3">NEWS Detail</div>
                <img src="http://127.0.0.1:8000/frontend/images/sep-line-2.jpg" width="250" height="2" alt="" class="line_image">


            </div>
        </div>
    </div>
</section>
<section class="main_banner_bottob_label"></section>



<section class="video-section-wrapper mb-4">
    <div class="container">
       <div class="public-detail-inner">
          <h2>Featured Publications for Anesthesia and Analgesia</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus libero doloribus ea amet culpa fugiat odit hic ullam commodi voluptate, consectetur tempora voluptas, sint odio architecto minima beatae vitae fugit numquam. Beatae nesciunt rem adipisci natus eligendi omnis nam maiores odio mollitia cumque quae necessitatibus harum repellendus dolorum, ipsum, officia nisi excepturi saepe explicabo amet animi dolor consequuntur. Iste non illo accusamus esse, cum maiores et, ex consectetur sit enim debitis tempora fugiat porro rem deleniti, neque voluptas consequuntur nesciunt? Alias sit repudiandae aut eum cumque incidunt, a odit vero odio culpa autem quod commodi quam quae rem illo deleniti minus hic officiis cum inventore asperiores libero error. Sapiente modi ut veniam magni omnis deserunt dolore iusto itaque, iure quod corporis inventore tempore error non explicabo nobis eum cumque ea rem repellat deleniti. Explicabo quaerat omnis laudantium vel impedit saepe veniam inventore id dolor, ipsa mollitia ab? Delectus facilis iure amet harum cum quis saepe magni molestiae minima impedit architecto sit sed, quas rerum quae voluptates cupiditate laboriosam enim suscipit tempore assumenda alias maiores dolores? Perspiciatis eos magni libero vero optio, voluptas explicabo doloremque vel quaerat quisquam. Eaque, optio quis assumenda vero laboriosam, excepturi asperiores repudiandae iusto quasi vitae perspiciatis.</p>




       </div>

 </div></section>


<section>
    <div class="container">
        <div class="advertising-sec">
            <div class="advertising-img-1"><img src="{{ asset('frontend/forums/img/add-1.png') }}" alt=""></div>
            <div class="advertising-img-2"><img src="{{ asset('frontend/forums/img/add-2.png') }}" alt=""></div>
            <div class="advertising-img-3"><img src="{{ asset('frontend/forums/img/add-3.png') }}" alt=""></div>
        </div>
    </div>
</section>
@endsection
