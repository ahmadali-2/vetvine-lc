<style>
    .guest_screen_text{
        padding: 10px;
        padding-top: 20px;
        text-align: center;
    }
    .guest_button{

    }
    .top_heading{
        color: '#577E80';
    }
    .bottom_heading{
        color: 'black';
    }
    </style>
    <div class="popup-body">
        <h2 class="member-login"><span>Course Registration</span></h2>
        <h5 class="guest_screen_text top_heading" style="font-size: 16px">CANCER IN PETS - GET TO KNOW YOUR PET'S LUMPH NODES!</h5>
        <div class="payment-method-form">
            <div class="billing-info">
                <div class="billing-description">
                    <div class="title">
                        <p style="margin: 0px">Billing Information</p>
                    </div>
                    <div class="description">
                        <p>Enter your payment details below.</p>
                    </div>
                </div>
                <div class="visa-card-detail">
                    <div class="title">
                        <P style="margin-top: 5px; margin-bottom: 0px">Cards Accepted</P>
                    </div>
                    <div class="accepted-cards d-flex">
                        <img src="{{ asset('frontend/img/card-1.png') }}" alt="">
                        <img src="{{ asset('frontend/img/card-2.png') }}" alt="">
                        <img src="{{ asset('frontend/img/card-3.png') }}" alt="">
                        <img src="{{ asset('frontend/img/card-4.png') }}" alt="">

                    </div>
                </div>
                <div class="credit-card-details">
                    <div class="card-title" style="margin: 0px;">
                        <p style="margin: 2px">Credit Card * </p>
                    </div>
                    <form action="{{ route('payementwebinars') }}" method="POST"
                        class="require-validation" data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">

                        @csrf
                        <input type="hidden" value="{{ $event_price }}" name="event_price">
                        <input type="hidden" value="{{ $event_id }}" name="event_id">
                        <input type="hidden" name="user_id">
                        <div class="num-feild required">
                            <label for="num">Credit Card Number</label>
                            <input autocomplete='off' type="text" name="card_number" id="num"
                                class='form-control card-number' size='20' placeholder="4242 4242 .....">
                        </div>
                        <div class="name-feild">
                            <div class="fname">
                                <label for="cvc">CVC</label>
                                <input autocomplete='off' name="cvc_number" placeholder='ex. 311'
                                    size='4' type='text' id="cvc" class='form-control card-cvc'>
                            </div>
                        </div>
                        <div class="expiry-feild required">
                            <div class="month">
                                <label for="ex-month">Expiration Month</label>
                                <select name="exp_month" id="ex-month" class="form-control card-expiry-month">
                                    <option value="" disabled selected>Select Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">
                                             {{date('F', mktime(0, 0, 0, $i, 10)) }}
                                        </option>
                                    @endfor
                                </select>
                                {{-- <input type="text" name="exp_month" placeholder='MM' size='2'
                                    id="ex-month"  class='form-control card-expiry-month'> --}}
                            </div>
                            @php
                                $year = date('Y');
                            @endphp

                            <div class="year">
                                <label for="year">Expiration Year</label>
                                <select name="exp_year" id="exp_year" class="form-control card-expiry-year">
                                    <option value="" disabled selected>Select Year</option>
                                    @for ($i = $year; $i <= $year + 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                {{-- <input type="text" name="exp_year" class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    id="year"> --}}
                            </div>
                        </div>
                        <div class="billing-btn">
                            <button id="continue_guest" type="button" value="{{ $event_price }}" style="margin-right: 20px">Pay
                                ${{ number_format($event_price, 2) }}
                            </button>
                            <a href="#" style="padding: 10px; color: #f27222; float: right"><u>Cancel</u></a>
                            <div id="guest_continue_loading" style="display: none"><img src="{{ asset('/frontend/images/orangeLoading.gif')}}" width="40px" style="margin-left:10px;"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#continue_guest').on('click', function(){
        $('#guest_continue_loading').css('display','block');
        setTimeout(
        function()
        {
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: "GET",
            url: '/next-guest-screen',
            data: {guest_screen: 4},
            success: function(response){
                $('#login_main_body').empty();
                $('#login_main_body').append(response.html);
            }
        })
        }, 1000);
    });
</script>
