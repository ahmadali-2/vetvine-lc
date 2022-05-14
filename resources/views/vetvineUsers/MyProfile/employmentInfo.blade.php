@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
<div class="dashboard-content-wrapper">
        <h4>Employment Info</h4>
        <label>Fields with * are .</label>

        <form action="{{route('employmentInfo.store')}}" method="post" id="employmentform" enctype="multipart/form-data">@csrf
        <div class="row">
        <div class="col-sm-6">
            <h6>Professional Position</h6>

            <input type="text" name="professional_position" value="{{$employmentInfo->professional_position ?? ''}}" placeholder="Professional Position"  class="form-control" />
          </div>

          <div class="col-sm-6">
            <h6>Employment Status</h6>

            <select class="form-control" name="employment_status">
                <option value="">Select Employment Status</option>
                <option value="full_time" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'full_time') selected @endif>Full Time</option>
                <option value="part_time" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'part_time') selected @endif>Part Time</option>
                <option value="retired" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'retired') selected @endif>Retired</option>
                <option value="none" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'none') selected @endif>None</option>
              </select>
          </div>

          <div class="col-sm-12 my-4">
            <h6>Street Address</h6>
            <textarea name="street_address" placeholder="Street Address" class="form-control">{{$employmentInfo->street_address ?? ''}}</textarea>
            <p></p>
            <!-- <p class="text-right">This field will NOT be displayed in your Profile - Enter State(s) and License
              Number(s):</p> -->
          </div>

        <div class="col-sm-6">
            <h6>Business Name</h6>
            <input type="text" name="business_name" value="{{$employmentInfo->business_name ?? ''}}" placeholder="Business Name"  class="form-control" />
          </div>

        <div class="col-sm-6">
            <h6>Business Email</h6>
            <input type="email" name="business_email" value="{{$employmentInfo->business_email ?? ''}}" placeholder="Business Email"  class="form-control" />
          </div>

          <div class="col-sm-6 my-4">
            <h6>Country</h6>
            <select class="form-control" name="country">
                <option value="">Select Country</option>
                @foreach($countries as $country)
                @if(isset($employmentInfo->country) && $employmentInfo->country == $country->id)
                    <option value="{{$country->id}}" selected>{{$country->country_name}}</option>
                    @else
                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                @endif
                @endforeach
              </select>
          </div>

        <div class="col-sm-6 my-4">
            <h6>State</h6>
            <input type="text" name="state" value="{{$employmentInfo->state ?? ''}}" placeholder="State"  class="form-control" />
          </div>

        <div class="col-sm-6 mb-4">
            <h6>City</h6>
            <input type="text" name="city" value="{{$employmentInfo->city ?? ''}}" placeholder="City"  class="form-control" />
          </div>

        <div class="col-sm-6 mb-4">
            <h6>Zip Code</h6>
            <input type="text" name="zip_code" value="{{$employmentInfo->zip_code ?? ''}}" placeholder="Zip Code"  class="form-control" />
          </div>

        <div class="col-sm-6">
            <h6>Work Phone Number</h6>
            <input type="text" name="work_phone" value="{{$employmentInfo->work_phone ?? ''}}" placeholder="Work Phone Number"  class="form-control" />
          </div>

          <div class="col-sm-12 mt-4">
            <h6>Details</h6>
            <textarea name="details" placeholder="" class="form-control">{{$employmentInfo->details ?? ''}}</textarea>
            <!-- <p class="text-right">This field will NOT be displayed in your Profile - Enter State(s) and License
              Number(s):</p> -->
          </div>
          <div class="col-sm-12 mt-5">
            <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button>
            <button type="submit" class="dashboard-btn">Save & Continue</button>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\MyProfile\EmploymentInfoRequest', '#employmentform') !!}
<script>

</script>
@endsection
