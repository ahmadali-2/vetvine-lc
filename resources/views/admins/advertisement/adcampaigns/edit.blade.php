@extends('admins.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Edit Ad Campaign</strong>
                </div>


                        <div class="card-body">
                            <form action="{{ route('ads-campaign.update', $adCampaigns->id) }}" method="post"
                                id="createadscampaign" novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="campaign_name" class="control-label mb-1">Campaign Name</label>
                                            <input id="campaign_name" placeholder="Enter Name" name="campaign_name"
                                                type="text" class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->campaign_name }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success ">

                                            <label for="start_date" class="control-label mb-1">Start Date</label>
                                            <input id="start_date" name="start_date" type="date" class="form-control"
                                                aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->start_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="total_clicks_allowed" class="control-label mb-1">Total
                                                Clicks</label>
                                            <input id="total_clicks_allowed" name="total_clicks_allowed" type="number"
                                                min="0" class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->total_clicks_allowed }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success ">
                                            <label for="end_date" class="control-label mb-1">End Date</label>
                                            <input id="end_date" name="end_date" type="date" class="form-control"
                                                aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->end_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="min_ctr" class="control-label mb-1">CTR</label>
                                            <input id="min_ctr" name="min_ctr" type="number" class="form-control"
                                                aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->min_ctr }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="total_views_allowed" class="control-label mb-1">Total View</label>
                                            <input id="total_views_allowed" name="total_views_allowed" type="number" min="0"
                                                class="form-control" aria-required="true" aria-invalid="false"
                                                value="{{ $adCampaigns->total_views_allowed }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="network_id" class="control-label mb-1 form-select">Network
                                                Level</label>
                                            <select id="network_id" style="width: 100%" name="network_id[]"
                                                aria-label="Default select example"
                                                class="js-example-basic-multiple form-control" data-val="true"
                                                multiple="multiple">
                                                @foreach ($networklevel as $campaign)
                                                    <option value="{{ $campaign->id }}"
                                                        @if (in_array($campaign->id, $selectedMembers)) selected @endif>
                                                        {{ $campaign->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="network_id" class="control-label mb-1 form-select">Status</label>
                                            <select id="status" name="status" aria-label="Default select example"
                                                class="form-control cc-number identified visa" value="" data-val="true">
                                                <option value="1" {{ $adCampaigns->status == 1 ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="0" {{ $adCampaigns->status == 0 ? 'selected' : '' }}>
                                                    Inactive
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Update</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                   


            </div>
        </div>
    </div>

@endsection
