@extends('admins.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <select id="emailTempleteSelection" class="browser-default custom-select">
                        <option selected value="-1">Select Templete</option>
                            @forelse($email_templetes as $key=>$email_templete)
                                <option value="{{$key}}" data-code="{{$email_templete->code}}">{{$email_templete->name}}</option>

                            @empty
                                <h1>No templete available yet, add one from mailchimp!</h1>
                            @endforelse
                    </select>
                    <img id="norecordImage" style="margin-left: 50%; margin-top: 8%;" src="{{asset('admin/images/mailchimp-subs.gif')}}">
                </div>
            </div>
            <div class="row mb-2">
                <div id="email_templete_load_area" class="col-sm-8"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        noRecordVerify();
        $('#emailTempleteSelection').on('change', function(){
            noRecordVerify();
            $('#email_templete_load_area').empty();
            $('#email_templete_load_area').append($('#emailTempleteSelection option:selected').attr('data-code'));
        });

        function noRecordVerify(){
            if($('#emailTempleteSelection option:selected').val() > -1){
                $('#norecordImage').hide();
            }else{
                $('#norecordImage').show();
            }
        }
    </script>
@endsection
