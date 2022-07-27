<style>
    .forgot_container{
        padding: 0px 0px 50px 0px;
    }
    .box{
        background-color: #E4F7FD;
        padding: 30px;
    }
    .forgot_password_btn button{
        background: #f27222;
    border-radius: 12px;
    font-size: 18px;
    transition: 0.5s all;
    font-family: 'Museo Sans 500';

    }
    .forgot_password_btn button:hover{
        background: transparent;
        border: 2px solid #f27222 !important;
        color: #f27222 !important;
    }
    .verify_email{
        position: absolute;
    top: -65px;
    font-size: 57px !important;
    background: #f27222;
    padding: 30px;
    border-radius: 50%;
    color: #fff;
    }
    .forgot_password_para{
        margin-top: 40px;
        color: #5c7c85 !important;
        font-size: 18px;
    }
    .become_member_area{
        margin: 30px 0px;
    }
    .forgot_box, .reset_box {
    font-family: "Museo 500" !important;
    margin-top: 45px;
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
    </style>
    @extends('frontend.master')
    @section('content')



    <div class="edit-profile-header edit_profile_banner"></div>
    <div class="container  forgot_container" style=" margin-bottom:30px">
        <section class="become_member_area">
            <div class="container">
              <h2>
                <span>Forgot password</span>
              </h2>
              <!-- <p class="membership-text">Please review the following details for this transaction.</p> -->
            </div>
          </section>
        <div class="row">



            {{-- <div class="col-md-3"></div> --}}
            <div class="col-md-6 mx-auto box forgot_box">
               <div class="row justify-content-center">
                <i class="fa fa-envelope verify_email" aria-hidden="true"></i>
               </div>
            <div class="mb-4 text-sm text-gray-600 forgot_password_para">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('password.email') }}" id="forget_password">
                @csrf
                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <input

                    " id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="row justify-content-center mt-4">
                <div class="flex items-center justify-center mt-4 g forgot_password_btn">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </div>
            </form>
            </div>
    </div>
    </div>


    @endsection
