@extends('frontend.master')
@section('content')
    <section>
        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column" id="main">
            <div class="payment-summery">
                <div class="container">
                    <section class="become_member_area">
                        <div class="container">
                            <h2>
                                <span>Payment Method</span>
                            </h2>
                            <!-- <p class="membership-text">Please review the following details for this transaction.</p> -->
                        </div>
                    </section>
                    <section>
                        <div class="payment-summery-area">
                            <div class="shoping-cart-details">
                                <div class="payment-method-form">
                                    <div class="billing-info">
                                        <div class="billing-description">
                                            <div class="title">
                                                <p>Billing Information</p>
                                            </div>
                                            <div class="description">
                                                <p>Enter your payment details below.</p>
                                            </div>
                                        </div>
                                        <div class="visa-card-detail">
                                            <div class="title">
                                                <P>Cards Accepted</P>
                                            </div>
                                            <div class="accepted-cards d-flex">
                                                <img src="{{ asset('frontend/img/card-1.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-2.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-3.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-4.png') }}" alt="">

                                            </div>
                                        </div>
                                        <div class="credit-card-details">
                                            <div class="card-title">
                                                <p>Credit Card * </p>
                                            </div>
                                            <form action="">
                                                <div class="name-feild">
                                                    <div class="fname">
                                                        <label for="first-name">First Name </label>
                                                        <input type="text" name="" id="first-name">
                                                    </div>
                                                    <div class="lname">
                                                        <label for="last-name"> Last Name</label>
                                                        <input type="text" name="" id="last-name">
                                                    </div>
                                                </div>
                                                <div class="num-feild">
                                                    <label for="num">Credit Card Number</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                                <div class="expiry-feild">
                                                    <div class="month">
                                                        <label for="ex-month">Expiration Month</label>
                                                        <input type="text" name="" id="ex-month">
                                                    </div>
                                                    <div class="year">
                                                        <label for="year">Year</label>
                                                        <input type="text" name="" id="year">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="credit-card-details">
                                            <div class="card-title">
                                                <p>Billing Address * </p>
                                            </div>
                                            <form action="">

                                                <div class="num-feild">
                                                    <label for="num">Street Address</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                                <div class="num-feild">
                                                    <label for="num">City</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                                <div class="num-feild">
                                                    <label for="num">State / Province / Region</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                                <div class="num-feild">
                                                    <label for="num">Postal / Zip Code</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                                <div class="num-feild">
                                                    <label for="num">Country</label>
                                                    <input type="text" name="" id="num">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="billing-btn">
                                            <button>Submit payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </main>
        <!-- === /main === -->
    </section>
@endsection
