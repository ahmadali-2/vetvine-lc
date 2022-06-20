@extends('frontend.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <h3 class="mt-3" >{{ isset($terms->page_title) ? $terms->page_title  : 'N/A' }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                {!! isset($terms->page_desc)  !!}   
            </div>
        </div>
    </div>
</div>

@endsection
