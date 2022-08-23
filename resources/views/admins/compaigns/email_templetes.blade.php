@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <h1>Vetvine Email Template</h1>
            <div class="row mb-2">
                <div id="email_templete_load_area" class="col-sm-8" data-template="{{$email_template}}">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#email_templete_load_area').empty();
            $('#email_templete_load_area').append($('#email_templete_load_area').attr('data-template'));
        });
    </script>
@endsection
