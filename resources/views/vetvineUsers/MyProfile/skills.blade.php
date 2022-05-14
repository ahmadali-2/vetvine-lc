@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
<div class="dashboard-content-wrapper">
    <h4>Skills & Expertise</h4>
    <form method="post" action="{{ route('skillsexpertise.store') }}" id="skillsfrm">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <h6>Species Contact</h6>
            <select class="js-example-basic-multiple form-control" name="skillsandexpertise[]" multiple="multiple">
                @foreach ($skills as $skill)
                    @if(in_array($skill->id,$sks))
                        <option value="{{ $skill->id }}" selected>{{ $skill->name }}</option>
                    @else
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endif
                @endforeach
              </select>
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
{!! JsValidator::formRequest('App\Http\Requests\VetvineUsers\MyProfile\SkillsAndExpertiseRequest','#skillsfrm') !!}
@endsection
