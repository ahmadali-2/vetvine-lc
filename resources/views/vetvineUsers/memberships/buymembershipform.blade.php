@extends('vetvineUsers.dashboard_master')

@section('dashboardcontent')



<section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                </div>

                <div class="col-sm-6">

                     <a class="btn btn-primary float-right" style="background-color:#f27222" href="{{ route('usermemberships.index') }}">
                       Go Back
                    </a>



                </div>

            </div>

        </div>

    </section>

    <div class="container">

         <div class="row">

            <div class="col-md-12">

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

                           <div class='col-xs-12 col-md-6  form-group card required'>

                              <label class='control-label'>Card Number</label>

                              <input autocomplete='off' name="card_number" class='form-control card-number' size='20'

                                 type='text'>

                           </div>



                        </div>

                        <input type="hidden" value="{{$plan->plan_price}}" name="plan_price">
                        <input type="hidden" value="{{$plan->id}}" name="membershipplan_id">
                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">






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

                            <div class='col-xs-12 col-md-6  form-group card required'>

                               <label class='control-label coupon_code'>Coupon Code</label>

                               <input autocomplete='off' name="card_number" class='form-control card-number' size='20'

                                  type='text'>
                                  <input type="button" value="apply_coupon" onclick="applycouponcode()">

                            </div>



                         </div>

                        <div class='form-row row'>

                           <div class='col-md-12 error form-group hide'>

                              <div class='alert-danger alert'>Please correct the errors and try

                                 again.

                              </div>

                           </div>

                        </div>



            <input type="submit" class="dashboard-btn mb-3 mt-3" value="Pay {{$plan->plan_price}} $">



                     </form>

                  </div>

               </div>

            </div>

         </div>

      </div>

@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>



<script type="text/javascript">

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
