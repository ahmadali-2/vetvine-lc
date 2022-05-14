@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
<div class="dashboard-content-wrapper">
        <h4>Personal Information</h4>

        <p class="registered-text">You've registered as a: Veterinarian</p>
    <form method="post" action="{{ route('personelinfo.store') }}" id="personlinfofrm">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <h6>Referred By</h6>
            <input type="text" placeholder="" required class="form-control" name="referredby" value="{{Auth::user()->referred_by}}"/>
            <p class="text-right">If a friend or colleague invited you to join our community, we'd like to thank them!
            </p>
          </div>
          <div class="col-sm-6">
            <h6>First Name</h6>
            <input type="text" placeholder="" required class="form-control" name="firstname" value="@php $str = Auth::user()->name;$arr = explode(' ',$str);echo $arr[0]; @endphp"/>
          </div>
          <div class="col-sm-6">
            <h6>Last Name</h6>
            <input type="text" placeholder="" required class="form-control" name="lastname" value="@php $str = Auth::user()->name;$arr = explode(' ',$str);echo $arr[1]; @endphp" />
          </div>
          <div class="col-sm-12 mt-4">
            <h6>Licensure</h6>
            <textarea placeholder="" class="form-control" name="licensure">{{Auth::user()->licence_no}}</textarea>
            <p class="text-right">This field will NOT be displayed in your Profile - Enter State(s) and License
              Number(s):</p>
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
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\MyProfile\PersonelInfoRequest','#personlinfofrm') !!}
@endsection
