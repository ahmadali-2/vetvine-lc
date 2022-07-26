@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="demo">
            <div class="container">
                <div class="row">

                    @foreach ($plans as $plan)
                        <div class="col-lg-4 col-md-6">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <h3 class="title">{{ $plan->plancategory->category_name }}</h3>
                                    <div class="price-value">
                                        <span class="amount">${{ $plan->plan_price }}</span>
                                        <span class="duration">Per Month</span>
                                    </div>
                                </div>
                                <ul class="pricing-content">
                                    @foreach (json_decode($plan->plan_features) as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                                <div class="pricingTable-signup">
                                    <a href="{{ route('usermemberships.show', $plan->id) }}">Buy MemberShip</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
