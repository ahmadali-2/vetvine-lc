<style>
    .forgot_container{
        padding: 30px 0px 50px 0px;
    }
    .box{
        background-color: #e6e6e6;
        padding: 30px;
    }
    .forgot_password_btn button{
        background: #f27222;
        border-radius:12px;
        transition: 0.5s all;
    }
    .forgot_password_btn button:hover{
        background: transparent;
        border: 2px solid #f27222 !important;
        color: #f27222 !important;
    }
    </style>
    @extends('frontend.master')
    @section('content')

    <div class="container  forgot_container" style="margin-top:50px; margin-bottom:30px">
        <div class="row">
            {{-- <div class="col-md-3"></div> --}}
            <div class="col-md-6 mx-auto box forgot_box">
            <div class="mb-4 text-sm text-gray-600 forgot_password_para">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <input  style="border: 1px solid #ced4da !important;

                    " id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="flex items-center justify-center mt-4 g forgot_password_btn">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </form>
            </div>
    </div>
    </div>


    @endsection
