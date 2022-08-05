<style>
    .forgot_container {
        padding: 10px 0px 50px 0px;
    }

    .box {
        background-color: #E4F7FD;
        padding: 30px;
    }

    .reset {
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 20px;
        text-transform: uppercase;
        color: #5c7c85;
    }

    .block input {
        width: 100%;
        display: inline-block;
        border: 1px solid #5c7c85 !important;
        padding: 5px 10px;
        height: 44px;
        color: #5c7c85;
        font-size: 18px;
    }

    .reset_password_button button {
        background: #f27222;
        border-radius: 12px;
        font-size: 18px;
        transition: 0.5s all;
        font-family: 'Museo Sans 500';

    }
</style>
@extends('frontend.master')

@section('content')
    <div class="edit-profile-header edit_profile_banner"></div>
    <div class="container forgot_container" style="margin-top:50px; margin-bottom:30px">
        <section class="become_member_area">
            <div class="container">
                <h2>
                    <span>Reset Your Password</span>
                </h2>
                <!-- <p class="membership-text">Please review the following details for this transaction.</p> -->
            </div>
        </section>
        <div class="row">

            {{-- <div class="col-md-3"></div> --}}


            <div class="col-md-6 mx-auto box reset_box">



                <x-jet-validation-errors class="mb-4" />



                <form method="POST" action="{{ route('password.update') }}" id="reset_password">

                    @csrf



                    <input type="hidden" name="token" value="{{ $request->route('token') }}">



                    <div class="block">

                        <x-jet-label for="email" value="{{ __('Email') }}" />

                        <input id="email" style="border: 1px solid #ced4da !important;

                "
                            class="form-control block mt-1 w-full" type="email" name="email" readonly
                            value="{{ $request->email }}" required autofocus />

                    </div>



                    <div class="mt-4">

                        <x-jet-label for="password" value="{{ __('Password') }}" />

                        <input id="password" style="border: 1px solid #ced4da !important;"
                            class="form-control block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                    </div>



                    <div class="mt-4">

                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />

                        <input id="password_confirmation" style="border: 1px solid #ced4da !important;

                "
                            class="form-control block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />

                    </div>


                    <div class="row justify-content-center">
                        <div class="flex items-center justify-center mt-4 reset_password_button">

                            <x-jet-button>

                                {{ __('Reset Password') }}

                            </x-jet-button>

                        </div>
                    </div>

                </div>
        </div>
        </div>

                @endsection
