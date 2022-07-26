{{-- @extends('vetvineUsers.dashboard_master')

@section('dashboardcontent') --}}

@extends('frontend.master')
@section('content')

<style>
    .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da !important;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.coupan_btn{
    background: #f27222 !important;
    padding: 5px;
    border-radius: 12px;
    font-family: "Museo Sans 500";
    margin: 20px 0px;
    color: #fff;
    border: 1px solid #f27222 !important;
    transition: 0.5s all;
}
.coupan_btn:hover{
    background: transparent !important;
    border: 1px solid #f27222 !important;
    color: #f27222;
}

.dashboard-btn{
    border-radius: 12px;
    font-family: "Museo Sans 500";
    margin: 20px 0px;
    color: #fff;
    border: 2px solid #f27222 !important;
    transition: 0.5s all;
}
.dashboard-btn:hover {
    background-color: transparent;
    border: 2px solid #f27222 !important;
    color: #f27222 !mportant;
}
</style>
<div class="edit-profile-header edit_profile_banner">

</div>
<section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6 ">

                </div>

                {{-- <div class="col-sm-6">

                     <a class="btn btn-primary float-right" style="background-color:#f27222" href="{{ route('usermemberships.index') }}">
                       Go Back
                    </a>



                </div> --}}

            </div>

        </div>

    </section>

    <div class="container">
        <section class="become_member_area">
            <div class="container">
              <h2>
                <span>Payment Method</span>
              </h2>
              <!-- <p class="membership-text">Please review the following details for this transaction.</p> -->
            </div>
          </section>
         <div class="row">

            <div class="col-md-6 mx-auto card p-4">

               <div class="panel panel-default credit-card-box">

                  <div class="panel-body">

                     @if (Session::has('success'))

                     <div class="alert alert-success text-center">

                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                        <p>{{ Session::get('success') }}</p>

                     </div>

                     @endif

                     <form

                        role="form"

                        action="{{route('usermemberships.store')}}"

                        method="post"

                        class="require-validation"

                        data-cc-on-file="false"

                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"

                        id="payment-form">

                        @csrf

                        <!-- <div class='form-row row'>

                           <div class='col-xs-12 form-group required'>

                              <label class='control-label'>Name on Card</label> <input

                                 class='form-control' size='4' name="card_name" type='text'>

                           </div>

                        </div> -->

                        <div class='form-row row'>

                           <div class='col-xs-12 col-md-12  form-group  required'>

                              <label class='control-label'>Card Number</label>

                              <input autocomplete='off' name="card_number" class='form-control card-number' size='20'

                                 type='text'>

                           </div>



                        </div>
                        <input type="hidden" id="planprice" value="{{$plan->plan_price}}" name="plan_price">
                        <input type="hidden" id="memberplan_id" value="{{$plan->id}}" name="membershipplan_id">
                        <input type="hidden" id="user_id " value="{{Auth::user()->id}}" name="user_id">
                        <input type="hidden" id="coupon_id" name="coupon_id">






                        <div class='form-row row'>

                           <div class='col-xs-12 col-md-4 form-group cvc required'>

                              <label class='control-label'>CVC</label> <input autocomplete='off'

                                 class='form-control card-cvc' name="cvc_number" placeholder='ex. 311' size='4'

                                 type='text'>

                           </div>

                           <div class='col-xs-12 col-md-4 form-group expiration required'>

                              <label class='control-label'>Expiration Month</label> <input

                                 class='form-control card-expiry-month' name="exp_month" placeholder='MM' size='2'

                                 type='text'>

                           </div>

                           <div class='col-xs-12 col-md-4 form-group expiration required'>

                              <label class='control-label'>Expiration Year</label> <input

                                 class='form-control card-expiry-year' name="exp_year" placeholder='YYYY' size='4'

                                 type='text'>

                           </div>

                        </div>


                        <div class='form-row row'>

                            <div class='col-xs-12 col-md-6  form-group required'>

                               <label class='control-label coupon_code'>Coupon Code</label>

                               <input autocomplete='off' name="coupon_code" id="coupon_code" class='form-control card-number' size='20'

                                  type='text'>
                                  <button type="button" id="applycouponcode" class="bt btn-primary coupan_btn">Apply Coupon</button>

                            </div>

                         </div>

                         <div class='form-row row'>

                            <div class='col-md-12 error form-group hide'>

                               <div class='alert-danger alert'>Please correct the errors and try

                                  again.

                               </div>

                            </div>

                         </div>



                         <div class="row justify-content-center">
                            <input id="pay_coupon_button" type="submit" class="dashboard-btn mb-3 mt-3" value="Pay {{$plan->plan_price}} $">
                         </div>




                     </form>



                  </div>

               </div>

            </div>

         </div>

      </div>

@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>

$(document).ready(function() {
localStorage.setItem('coupon_code', '');
$('#applycouponcode').on('click', function() {
    var coupon_code = $('#coupon_code').val();
    if(coupon_code == localStorage.getItem('coupon_code')){
        toastr.error('Coupon code already applied');
    }
    else{
    var plan_price = $('#planprice').val();
    if(coupon_code != '')
    {
        $.ajax({
            url: "{{ route('usermemberships.applycouponcode') }}",
            type: "POST",
            data: {
                plan_price: plan_price,
                coupon_code: coupon_code,
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                console.log(data);
                if(data.code == 200){
                    $('#pay_coupon_button').val('Pay '+data.discounted_price+' $');
                    $('#planprice').val(data.discounted_price);
                    $('#coupon_id').val(data.coupon_id);
                    localStorage.setItem('coupon_code', coupon_code);
                    toastr.success(data.message);
                }
                if(data.code == 400){
                    toastr.error(data.message);
                }
                if(data.code == 401){
                    toastr.warning(data.message);
                }
            }
        });
    }
    else
    {
        $('#coupon_code_msg').html('please enter coupon code');
    }

    }

});
});

$(function() {

    var $form         = $(".require-validation");

  $('form.require-validation').bind('submit', function(e) {

    var $form         = $(".require-validation"),

        inputSelector = ['input[type=email]', 'input[type=password]',

                         'input[type=text]', 'input[type=file]',

                         'textarea'].join(', '),

        $inputs       = $form.find('.required').find(inputSelector),

        $errorMessage = $form.find('div.error'),

        valid         = true;

        $errorMessage.addClass('hide');



        $('.has-error').removeClass('has-error');

    $inputs.each(function(i, el) {

      var $input = $(el);

      if ($input.val() === '') {

        $input.parent().addClass('has-error');

        $errorMessage.removeClass('hide');

        e.preventDefault();

      }

    });



    if (!$form.data('cc-on-file')) {

      e.preventDefault();

      Stripe.setPublishableKey($form.data('stripe-publishable-key'));

      Stripe.createToken({

        number: $('.card-number').val(),

        cvc: $('.card-cvc').val(),

        exp_month: $('.card-expiry-month').val(),

        exp_year: $('.card-expiry-year').val()

      }, stripeResponseHandler);

    }



  });



  function stripeResponseHandler(status, response) {

        if (response.error) {

            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            // token contains id, last4, and card type

            var token = response['id'];

            // insert the token into the form so it gets submitted to the server

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            $form.get(0).submit();

        }

    }



});

</script>

@endsection
