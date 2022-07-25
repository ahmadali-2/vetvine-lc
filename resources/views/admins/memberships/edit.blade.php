@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Edit Membership Plans</strong>
                </div>
                <div class="card-body">
                    <div id="pay-invoice">
                            <div class="card-title">
                                <h3 class="text-center">Plan Detail</h3>
                            </div>
                            <hr>
                            <form action="{{ route('membership.update', $editPlan->id) }}" method="post" id="membership">
                                @csrf
                                @method('PUT')
                                <div class="form-group text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-1">Plan Name</label>
                                            <input name="plan_name" value="{{ $editPlan->plan_name ?? '' }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label mb-1">Plan Price</label>
                                            <input name="plan_price" value="{{ $editPlan->plan_price ?? '' }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="plancategoryid" class=" control-label mb-1 form-select">Select
                                                Category
                                            </label>
                                            <select id="plancategoryid" name="plancategoryid"
                                                aria-label=" Default select example"
                                                class=" js-example-basic-multiple form-control cc-number identified visa"
                                                data-val="true">
                                                @foreach ($planCategories as $plancategory)
                                                    <option
                                                        {{ $editPlan->member_ship_plan_categories_id == $plancategory->id ? 'selected' : '' }}
                                                        value="{{ $plancategory->id }}">{{ $plancategory->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-1">Expiry Date</label>
                                            <input name="expiry_date" value="{{ $editPlan->expiry_date ?? '' }}" type="date"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="member_id" class="control-label mb-1 form-select">Member Level</label>
                                            <select class="js-example-basic-multiple form-control" name="member_id[]"
                                                multiple="multiple">
                                                @foreach ($nerworklevels as $networklevel)
                                                    <option value="{{ $networklevel->id }}"
                                                        @if (in_array($networklevel->id, $selectedMembers)) selected @endif>{{ $networklevel->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label mb-1">Plan Description</label>
                                        <textarea name="plan_description" value="{{ $editPlan->plan_description ?? '' }}"
                                            class="form-control">{{ $editPlan->plan_description ?? '' }}</textarea>

                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-11">
                                        <div id="package_description_row">

                                            <div class="row">
                                                @foreach (json_decode($editPlan->plan_features) as $feature)
                                                    <div class="col-sm-12 ">
                                                        <label class="label__wrapper required">Plan Features</label>
                                                        <input type="text" value="{{ $feature }}"
                                                            name="plan_features[]" class="form-control input__box--wrapper">

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <a class="btn btn-primary btn-sm add_package_description_row"
                                            onclick="addmoreFields()"
                                            style="margin-left:12px;font-size:19px;margin-top:33px;"><i
                                                class="fas fa-fw fa-plus "></i></a>
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Submit Plan</span>
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
