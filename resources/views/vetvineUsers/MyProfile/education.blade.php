@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
@php
    $arr = explode(',',$userEducationData->degree_name ?? '');
@endphp
<div class="dashboard-content-wrapper">
        <h4>Education</h4>
    <form method="post" action="{{ route('education.store') }}" id="educationfrm">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <h6>Degree(s) Earned</h6>
            <p class="text-right">
                If you don't see a degree or diploma listed, enter it in the textbox below.
            </p>
            <select class="js-example-basic-multiple form-control" name="degrees[]" multiple="multiple">
                @foreach ($degrees as $degree)
                    @if(in_array($degree->id,$arr))
                        <option value="{{ $degree->id }}" selected>{{ $degree->degree_name }}</option>
                    @else
                        <option value="{{ $degree->id }}">{{ $degree->degree_name }}</option>
                    @endif
                @endforeach
              </select>
              <p class="text-right">
                Please specify 'Other', if any, in the text field below.
            </p>
            <input type="text" placeholder="" required class="form-control" name="otherdegree" value="{{$userEducationData->other_school ?? ''}}"/>
          </div>
          <div class="col-sm-6 mt-4">
            <h6>Vaterinary School</h6>
            <select class="form-control" name="schoolname">
                <option value="">Select Veterinary School</option>
                @foreach ($schoolnames as $schoolname)
                @if(isset($userEducationData->school) && $userEducationData->school == $schoolname->id)
                      <option value='{{$schoolname->id }}' selected>{{$schoolname->school_name}}</option>;
                    @else
                    <option value="{{ $schoolname->id }}">{{ $schoolname->school_name }}</option>
                    @endif
                @endforeach
            </select>
            <p class="text-right">
                Please specify "Other", if any, in the text field below.
            </p>
            <input type="text" placeholder="" required class="form-control" name="otherschool" value="{{$userEducationData->other_school ?? ''}}"/>
          </div>
          <div class="col-sm-6 mt-4">
            <h6>Year Graduated</h6>
            <select class="form-control" name="gradutionyear">
                <option value="">Select Graduation Year</option>
                @for($i = date('Y') ; $i > 1950; $i--)
                    @if(isset($userEducationData->graduation_year) && $userEducationData->graduation_year == $i)
                      <option value='{{$i}}' selected>{{$i}}</option>;
                    @else
                        <option value='{{$i}}'>{{$i}}</option>;
                    @endif
                @endfor
              </select>
          </div>
          <div class="col-sm-6 mt-4">
            <h6>Did You Do Internship?</h6>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="internship" id="internship" value="1" @if(isset($userEducationData->internship) && $userEducationData->internship==1 ) checked @endif/>
                <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="internship" id="internship" value="0" @if(isset($userEducationData->internship) && $userEducationData->internship==0 ) checked @endif/>
                <label class="form-check-label" for="flexRadioDefault2"> No </label>
              </div>
          </div>
          <div class="col-sm-6 mt-4">
            <h6>Did You Do Residency?</h6>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="residency" id="residency" value="1" @if(isset($userEducationData->residency) && $userEducationData->residency==1 ) checked @endif>
                <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
                </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="residency" id="residency" value="0" @if(isset($userEducationData->residency) && $userEducationData->residency==0 ) checked @endif/>
                <label class="form-check-label" for="flexRadioDefault2"> No </label>
              </div>
          </div>
          <div class="col-sm-12 mt-5">
            <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button>
            <input type="submit" class="dashboard-btn" value="Save & Continue">
          </div>
        </div>
    </form>
      </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\MyProfile\UserEducationRequest','#educationfrm') !!}
@endsection
