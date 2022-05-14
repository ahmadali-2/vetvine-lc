@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
<div class="dashboard-content-wrapper">
        <h4>Edit My Photo</h4>


        <div class="row">
          <div class="col-sm-12">
            <h6>Edit My Photo</h6>
          </div>
          <form action="{{route('editPhoto.store')}}" method="post" id="photoform" enctype="multipart/form-data">@csrf
          <div class="col-md-4 col-sm-6">
              <img src="@if(Auth::user()->profile_photo) {{ asset('/frontend/images/Profile-Images/'.Auth::user()->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" alt="" id="user-image" height="200px">
              <button type="button" class="btn btn-dark mt-3" onclick="document.getElementById('profile_photo').click()">Choose File</button>
              <input type="file" style="visibility:hidden" name="profile_photo" id="profile_photo" onchange="document.getElementById('user-image').src = window.URL.createObjectURL(this.files[0])">
          </div>
          <div class="col-sm-12 mt-5">
            <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button>
            <button type="submit" class="dashboard-btn">Save & Continue</button>
          </div>
          </form>
        </div>
      </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\MyProfile\EditPhotoRequest', '#photoform') !!}
@endsection
