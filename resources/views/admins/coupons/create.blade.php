@extends('admins.master')

@section('content')
    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-header">

                    <strong class="card-title">Create New Coupon</strong>

                </div>



                    <div id="pay-invoice">

                        <div class="card-body">

                            <form action="{{ route('coupon-code.store') }}" method="post" id="createcoupon"
                                novalidate="novalidate" enctype="multipart/form-data">

                                @csrf

                                <div class="row">

                                    <div class="col-6">

                                        <div class="form-group">

                                            <label for="coupon_code" class="control-label mb-1">Coupon Code (System Generated)</label>

                                            <input id="coupon_code" readonly placeholder="Enter Coupon Code" name="coupon_code"
                                                type="text" class="form-control" aria-required="true" aria-invalid="false"
                                                value="VETVINE-{{ $random }}">

                                                @error('coupon_code')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="form-group has-success ">



                                            <label for="start_date" class="control-label mb-1">Start Date</label>

                                            <input id="start_date" name="start_at" type="date" class="form-control"
                                                aria-required="true" aria-invalid="false"
                                                value="">

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-6">

                                        <div class="form-group">

                                            <label for="end_date" class="control-label mb-1">End Date</label>

                                            <input id="end_date" placeholder="Enter End Date" name="expired_at"
                                                type="date" class="form-control" aria-required="true" aria-invalid="false"
                                                value="">


                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="form-group has-success ">

                                            <label for="coupon_price" class="control-label mb-1">Coupon Price</label>

                                            <input id="coupon_price" placeholder="Enter Counpon Price" name="amount" type="number"
                                                min="0" class="form-control" aria-required="true" aria-invalid="false"
                                                value="">

                                        </div>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group">

                                            <label for="coupon_type" class="control-label mb-1">Coupon Type</label>

                                            <select name="coupon_type" id="coupon_type" class="form-control">
                                                <option value="">Select Coupon Type</option>
                                                <option value="percentage">Percentage</option>
                                                <option value="fixed">Fixed</option>
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="coupon_status" class="control-label mb-1">Coupon Status</label>
                                            <br>
                                            <input type="checkbox" name="coupon_status" data-toggle="toggle"
                                                data-onstyle="outline-success" data-size="md" data-offstyle="outline-danger"
                                                data-on="<i class='fa fa-unlock'></i> Active"
                                                data-off="<i class='fa fa-lock'></i> Inactive">

                                        </div>
                                    </div>
                                </div>



                                <div class="mt-3">

                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Submit</span>

                                        <span id="payment-button-sending" style="display:none;">Sending???</span>

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>





            </div>

        </div>

    </div>
@endsection
