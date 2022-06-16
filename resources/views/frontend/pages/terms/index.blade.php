@extends('frontend.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <h3 class="mt-3" >{{ $terms->page_title }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                {!! $terms->page_desc !!}
            </div>
        </div>
    </div>
</div>

@endsection
