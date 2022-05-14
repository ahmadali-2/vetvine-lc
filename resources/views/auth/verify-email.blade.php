<style>
    .forgot_container{
        padding: 30px 0px 50px 0px;
    }
    .box{
        background-color: #e6e6e6;
        padding: 30px;
    }
    </style>
@extends('frontend.master')
@section('content')

<div class="container forgot_container" style="margin-top:50px; margin-bottom:30px">
    <div class="row">

        <div class="col-md-6 mx-auto box">
        <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('verification.send') }}">
                @csrf
            <div class="flex items-center justify-center mt-4">
                <x-jet-button type="submit">
                    {{ __('Resend Verification Email') }}
                </x-jet-button>
            </div>
        </form>
        </div>
</div>
</div>


@endsection
