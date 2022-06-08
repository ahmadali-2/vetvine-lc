{{-- <title>{{ config('chatify.name') }}</title> --}}
{{-- Meta tags --}}


{{-- scripts --}}
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script> --}}
<script src="{{ asset('js/chatify/autosize.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />

{{-- Messenger Color Style--}}
<style>
    .messenger-sendCard {
    background: #fff;
    border-top: 3px solid #5c7c85 !important;
}
.messenger-sendCard form {
    width: 100%;
    display: inline-flex;
    margin: 0;
    /* background: #5c7c85; */
    border-bottom: 3px solid #5c7c85 !important;
}
.messenger-sendCard form  span{
    color: #f27222;
    font-size: 25px;
}
.messenger-listView-tabs a, .messenger-listView-tabs a:hover, .messenger-listView-tabs a:focus {
    color: #f27222 !important;
}
.mc-sender p {
    background: #f27222 !important;
    color: #fff !important;
}
.m-list-active{
    background: #f27222 !important;

}
.m-header-messaging .avatar {
    background-color: #fff;
}
.message-card p {
    background: #5c7c85;
    color: #fff;
    box-shadow: 0px 6px 11px rgb(18 67 105 / 3%);
}
</style>
@include('Chatify::layouts.messengerColor')
