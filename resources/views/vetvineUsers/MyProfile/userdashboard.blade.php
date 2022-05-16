@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
{{-- @php
    $arr = explode(',',$userEducationData->degree_name ?? '');
@endphp --}}
<form  method="post" action="{{ route('personelinfo.store') }}" id="profile_form" enctype="multipart/form-data">
    @csrf
    <div class="dashboard-content-wrapper"  id="personal">
      <h4>Personal Information</h4>
      <p class="registered-text">You've registered as a: Veterinarian</p>
      <div class="row">
        <div class="col-sm-12">
          <h6>Referred By</h6>
          <input type="text" placeholder="" required class="form-control" name="referredby" value="{{Auth::user()->referred_by}}"/>
          <p class="text-right">If a friend or colleague invited you to join our community, we'd like to thank them!
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h6>First Name<span class="asteric">*</span></h6>
          <input type="text" placeholder="" required class="form-control" name="firstname" id="firstname" value="@php $str = Auth::user()->name;$arr = explode(' ',$str);echo $arr[0]; @endphp"/>
          <span class="asteric" id ="error1"></span>
        </div>
        <div class="col-sm-6">
          <h6>Last Name<span class="asteric">*</span></h6>
          <input type="text" placeholder="" required class="form-control" name="lastname" id="lastname" value="@php $str = Auth::user()->name;$arr = explode(' ',$str);echo $arr[1]; @endphp" />
          <span class="asteric" id ="error2"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mt-4">
          <h6>Licensure<span class="asteric">*</span></h6>
          <textarea placeholder="" class="form-control" name="licensure" id="licensure">{{Auth::user()->licence_no}}</textarea>
          <span class="asteric" id ="error3"></span>
          <p class="text-right">This field will NOT be displayed in your Profile - Enter State(s) and License
            Number(s):</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mt-5">
          <!-- <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button> -->
          <button type="button" class="dashboard-btn" id="personal_btn">Save & Continue</button>
        </div>
      </div>
    </div>
    <div class="dashboard-content-wrapper d-none" id="employe">
      <h4>Employment Info</h4>
      <div class="row">
        <div class="col-sm-6">
            <h6>Professional Position<span class="asteric">*</span></h6>
            <input type="text" name="professional_position" id="professional_position" value="{{$employmentInfo->professional_position ?? ''}}" placeholder=""  class="form-control" />
            <span class="asteric" id ="error4"></span>
          </div>
          <div class="col-sm-6">
            <h6>Employment Status<span class="asteric">*</span></h6>
            <select class="form-control" name="employment_status" id="employment_status">
                <option value="">Select Employment Status</option>
                <option value="full_time" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'full_time') selected @endif>Full Time</option>
                <option value="part_time" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'part_time') selected @endif>Part Time</option>
                <option value="retired" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'retired') selected @endif>Retired</option>
                <option value="none" @if(isset($employmentInfo->employment_status) && $employmentInfo->employment_status == 'none') selected @endif>None</option>
              </select>
              <span class="asteric" id ="error5"></span>
          </div>
      </div>
        <div class="row">
            <div class="col-sm-12 my-4">
                <h6>Street Address<span class="asteric">*</span></h6>
                <textarea name="street_address" id="street_address" placeholder="" class="form-control">{{$employmentInfo->street_address ?? ''}}</textarea>
                <span class="asteric" id ="error6"></span>
              </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h6>Business Name<span class="asteric">*</span></h6>
                <input type="text" name="business_name" id="business_name" value="{{$employmentInfo->business_name ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error7"></span>
              </div>
            <div class="col-sm-6">
                <h6>Business Email<span class="asteric">*</span></h6>
                <input type="email" name="business_email" id="business_email" value="{{$employmentInfo->business_email ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error8"></span>
              </div>
        </div>
        <div class="row">
            <div class="col-sm-6 my-4">
                <h6>Country<span class="asteric">*</span></h6>
                <select class="form-control" name="country" id="country">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    @if(isset($employmentInfo->country) && $employmentInfo->country == $country->id)
                        <option value="{{$country->id}}" selected>{{$country->country_name}}</option>
                        @else
                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                    @endif
                    @endforeach
                  </select>
                  <span class="asteric" id ="error9"></span>
              </div>
                <div class="col-sm-6 my-4">
                    <h6>State<span class="asteric">*</span></h6>
                    <input type="text" name="state" id="state" value="{{$employmentInfo->state ?? ''}}" placeholder=""  class="form-control" />
                    <span class="asteric" id ="error10"></span>
                  </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <h6>City<span class="asteric">*</span></h6>
                <input type="text" name="city" id="city" value="{{$employmentInfo->city ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error11"></span>
              </div>

            <div class="col-sm-6 mb-4">
                <h6>Zip Code<span class="asteric">*</span></h6>
                <input type="text" name="zip_code" id="zip_code" value="{{$employmentInfo->zip_code ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error12"></span>
              </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h6>Work Phone Number<span class="asteric">*</span></h6>
                <input type="number" name="work_phone" id="work_phone" value="{{$employmentInfo->work_phone ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error13"></span>
              </div>
              <div class="col-sm-6 mt-4">
                <h6>Details</h6>
                <textarea name="details" id="details" placeholder="" class="form-control">{{$employmentInfo->details ?? ''}}</textarea>
                <span class="asteric" id ="error18"></span>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12 mt-5">
          <!-- <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button> -->
          <button type="button" class="dashboard-btn" id="employe_btn">Save & Continue</button>
        </div>
      </div>
    </div>

    <!-- skilss Form div start  -->
    <div class="dashboard-content-wrapper d-none" id="skill">
      <h4>Skills & Expertise<span class="asteric">*</span></h4>
      <div class="row">
        <div class="col-sm-12">
            <h6>Species Contact</h6>
            <select class="js-example-basic-multiple form-control" name="skillsandexpertise[]" id="skillsandexpertise" multiple="multiple" style="width: 100%;">
                @foreach ($skills as $skill)
                    @if(in_array($skill->id,$sks))
                        <option value="{{ $skill->id }}" selected>{{ $skill->name }}</option>
                    @else
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endif
                @endforeach
              </select>
              <span class="asteric" id ="error14"></span>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mt-5">
          <button type="button" class="dashboard-btn" id="skill_btn">Save & Continue</button>
        </div>
      </div>
    </div>
    <!-- skilss Form div end  -->

<!-- Education  Form div end  -->

    <div class="dashboard-content-wrapper d-none" id="education">
      <h4>Education</h4>
      <div class="row">
      <div class="col-sm-12">
        <h6>Degree(s) Earned<span class="asteric">*</span></h6>
        <p class="text-right">
            If you don't see a degree or diploma listed, enter it in the textbox below.
        </p>
        <select class="js-example-basic-multiple form-control" id="degree_id" name="degree_id[]" multiple="multiple"  style="width: 100%;">
            @foreach ($degrees as $degree)
                @if(in_array($degree->id,$ued))
                    <option value="{{ $degree->id }}" selected>{{ $degree->degree_name }}</option>
                @else
                    <option value="{{ $degree->id }}">{{ $degree->degree_name }}</option>
                @endif
            @endforeach
          </select>
          <span class="asteric" id ="error15"></span>
          <p class="text-right">
            Please specify 'Other', if any, in the text field below.
        </p>
        <input type="text" placeholder="" required class="form-control" name="otherdegree" value="{{$userEducationData->other_school ?? ''}}"/>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-6 mt-4">
            <h6>Vaterinary School<span class="asteric">*</span></h6>
            <select class="form-control" name="schoolname" id="schoolname">
                <option value="">Select Veterinary School</option>
                @foreach ($schoolnames as $schoolname)
                @if(isset($userEducationData->school) && $userEducationData->school == $schoolname->id)
                      <option value='{{$schoolname->id }}' selected>{{$schoolname->school_name}}</option>;
                    @else
                    <option value="{{ $schoolname->id }}">{{ $schoolname->school_name }}</option>
                    @endif
                @endforeach
            </select>
            <span class="asteric" id ="error16"></span>
            <p class="text-right">
                Please specify "Other", if any, in the text field below.
            </p>
            <input type="text" placeholder="" required class="form-control" name="otherschool" value="{{$userEducationData->other_school ?? ''}}"/>
          </div>
          <div class="col-sm-6 mt-4">
            <h6>Year Graduated<span class="asteric">*</span></h6>
            <select class="form-control" name="gradutionyear" id="gradutionyear">
                <option value="">Select Graduation Year</option>
                @for($i = date('Y') ; $i > 1950; $i--)
                    @if(isset($userEducationData->graduation_year) && $userEducationData->graduation_year == $i)
                      <option value='{{$i}}' selected>{{$i}}</option>;
                    @else
                        <option value='{{$i}}'>{{$i}}</option>;
                    @endif
                @endfor
              </select>
              <span class="asteric" id ="error17"></span>
          </div>
        </div>
        <div class="row">
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
        </div>
        <div class="row">
            <div class="col-sm-12 mt-5">
                <button type="button" class="dashboard-btn" id="education_btn">Save & Continue</button>
            </div>
      </div>
    </div>

<!-- Education Form div end  -->

    <!-- edit profile Form div start  -->
    <div class="dashboard-content-wrapper d-none" id="profile">
      <h4>Edit My Photo</h4>
      <div class="row">
        <div class="col-sm-6">
            <img src="@if(Auth::user()->profile_photo) {{ asset('/frontend/images/Profile-Images/'.Auth::user()->profile_photo)}} @else {{asset('frontend/images/thumbnail.jfif')}} @endif" alt="" id="user-image" height="200px">
            <button type="button" class="btn btn-dark mt-3" onclick="document.getElementById('profile_photo').click()">Choose File</button>
            <input type="file" style="visibility:hidden" name="profile_photo" id="profile_photo" onchange="document.getElementById('user-image').src = window.URL.createObjectURL(this.files[0])">
        </div>
      </div>
        <div class="row">
        <div class="col-sm-12 mt-5">
            <button type="submit" class="dashboard-btn" id="submit_btn">Save & Complete Profile</button>
        </div>
      </div>
    </div>
    <!-- edit profile Form div end  -->
  </form>
  @endsection
  @section('scripts')
  <script>
    $('#firstname').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error1').hide();
        }
        else {
            $(this).closest('div').find('#error1').show();
        }
    });
    $('#lastname').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error2').hide();
        }
        else {
            $(this).closest('div').find('#error2').show();
        }
    });
    $('#licensure').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error3').hide();
        }
        else {
            $(this).closest('div').find('#error3').show();
        }
    });
    $('#professional_position').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error4').hide();
        }
        else {
            $(this).closest('div').find('#error4').show();
        }
    });
    $('#employment_status').on('click', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error5').hide();
        }
        else {
            $(this).closest('div').find('#error5').show();
        }
    });
    $('#street_address').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error6').hide();
        }
        else {
            $(this).closest('div').find('#error6').show();
        }
    });
    $('#business_name').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error7').hide();
        }
        else {
            $(this).closest('div').find('#error7').show();
        }
    });
    $('#business_email').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error8').hide();
        }
        else {
            $(this).closest('div').find('#error8').show();
        }
    });
    $('#country').on('click', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error9').hide();
        }
        else {
            $(this).closest('div').find('#error9').show();
        }
    });
    $('#state').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error10').hide();
        }
        else {
            $(this).closest('div').find('#error10').show();
        }
    });
    $('#city').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error11').hide();
        }
        else {
            $(this).closest('div').find('#error11').show();
        }
    });
    $('#zip_code').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error12').hide();
        }
        else {
            $(this).closest('div').find('#error12').show();
        }
    });
    $('#work_phone').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error13').hide();
        }
        else {
            $(this).closest('div').find('#error13').show();
        }
    });
    $('#details').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error18').hide();
        }
        else {
            $(this).closest('div').find('#error18').show();
        }
    });
    $('#skillsandexpertise').on('change', function () {
        var selected = $("#skillsandexpertise :selected").map((_, e) => e.value).get();
        if (selected != '') {
            $(this).closest('div').find('#error14').hide();
        }
        else {
            $(this).closest('div').find('#error14').show();
        }
    });
    $('#degree_id').on('change', function () {
        var selected = $("#degree_id :selected").map((_, e) => e.value).get();
        if (selected != '') {
            $(this).closest('div').find('#error15').hide();
        }
        else {
            $(this).closest('div').find('#error15').show();
        }
    });
    $('#schoolname').on('click', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error16').hide();
        }
        else {
            $(this).closest('div').find('#error16').show();
        }
    });
    $('#gradutionyear').on('click', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error17').hide();
        }
        else {
            $(this).closest('div').find('#error17').show();
        }
    });
    $(document).ready(function(e){
    $("#personal_btn").on("click",function(e){
    // e.preventDefault();
    var flag =true;
    if($.trim($('#firstname').val()) == '')
    {
      flag =false;
    $("#error1").html("First name field can't be left blank.");
   }
   if($.trim($('#lastname').val()) == '')
    {
      flag =false;
    $("#error2").html("Last name field can't be left blank.");
   }
   if($.trim($('#licensure').val()) == '')
    {
      flag =false;
    $("#error3").html("Licensure field can't be left blank.");
   }
   else if(flag == true){

     $("#personal").addClass('d-none');
     $("#employe").removeClass('d-none');
     $("#employe").removeClass('hide_form');
     $(".nav_ul li .active").removeClass("active");
     $(".nav_ul li .employe").addClass("active");
     $(".personal").addClass("personal_show");
   }


    })
    $("#employe_btn").on("click",function(e){
    // e.preventDefault();
    var flag =true;
    if($.trim($('#professional_position').val()) == '')
    {
      flag =false;
    $("#error4").html("Professional position field can't be left blank.");
   }
   if($('#employment_status option:selected').val() == '')
    {
      flag =false;
    $("#error5").html("Employment status field can't be left blank.");
    return;
   }
   if($.trim($('#street_address').val()) == '')
    {
      flag =false;
    $("#error6").html("Street address field can't be left blank.");
   }
   if($.trim($('#business_name').val()) == '')
    {
      flag =false;
    $("#error7").html("Business name field can't be left blank.");
   }
   if($.trim($('#business_email').val()) == '')
    {
      flag =false;
    $("#error8").html("Business email field can't be left blank.");
   }
   if($('#country option:selected').val() == '')
    {
      flag =false;
    $("#error9").html("Country field can't be left blank.");
    return;
   }
   if($.trim($('#state').val()) == '')
    {
      flag =false;
    $("#error10").html("State field can't be left blank.");
   }
   if($.trim($('#city').val()) == '')
    {
      flag =false;
    $("#error11").html("City field can't be left blank.");
   }
   if($.trim($('#zip_code').val()) == '')
    {
      flag =false;
    $("#error12").html("Zip code field can't be left blank.");
   }
   if($.trim($('#work_phone').val()) == '')
    {
      flag =false;
    $("#error13").html("Work phone field can't be left blank.");
   }
   if($.trim($('#details').val()) == '')
    {
      flag =false;
    $("#error18").html("Details field can't be left blank.");
   }

   else if(flag = true){


     $("#employe").addClass('d-none');
     $(".employe").addClass('employee_show');
     $("#skill").removeClass('d-none');
     $("#skill").removeClass('hide_form');
     $(".nav_ul li .active").removeClass("active");
     $(".nav_ul li .skill").addClass("active");
    }
    })


    // education form show
    $("#skill_btn").on("click",function(e){
    // e.preventDefault();
    // alert("click");
    var selected = $("#skillsandexpertise :selected").map((_, e) => e.value).get();
    if (selected == '')
    {
        $("#error14").html("Skills and expertise field can't be left blank.");
    }
   else{
      let per = $("#personal").html();
      console.log(per);

     $("#skill").addClass('d-none');
     $(".skill").addClass('skill_show');
     $("#education").removeClass('d-none');
     $("#education").removeClass('hide_form');
     $(".nav_ul li .skill").removeClass("active");
     $(".nav_ul li .education").addClass("active");
   }
    })
    // profile form show
    $("#education_btn").on("click",function(e){
    var flag =true;
    var selected = $("#degree_id :selected").map((_, e) => e.value).get();
    if (selected == '')
    {
      flag =false;
    $("#error15").html("Degree field can't be left blank.");
    return;
    }
   if($('#schoolname option:selected').val() == '')
    {
      flag =false;
    $("#error16").html("School name field can't be left blank.");
    return;
   }
   if($('#gradutionyear option:selected').val() == '')
    {
      flag =false;
    $("#error17").html("Gradution year field can't be left blank.");
    return;
   }
   else if(flag=true){
      let per = $("#personal").html();
      console.log(per);

     $("#education").addClass('d-none');
     $(".education").addClass('education_show');
     $("#profile").removeClass('d-none');
     $("#profile").removeClass('hide_form');
     $(".nav_ul li .education").removeClass("active");
     $(".nav_ul li .profile").addClass("active");
    }
    })
     $("#submit_btn").on("click",function(){
      $("#profile_form").submit();
     })

    })

        $(document).ready(function () {
          $(".tab_1_section_parent").on("click",function(e){
              $('.tab_1_section').slideDown(500);
              $('.tab_2_section').slideUp(500);
              $('.tab_3_section').slideUp(500);
              $('.tab_4_section').slideUp(500);

          });

          $(".tab_2_section_parent").on("click",function(e){
              $('.tab_1_section').slideUp(500);
              $('.tab_2_section').slideDown(500);
              $('.tab_3_section').slideUp(500);
              $('.tab_4_section').slideUp(500);

          });
          $(".tab_3_section_parent").on("click",function(e){
              $('.tab_1_section').slideUp(500);
              $('.tab_2_section').slideUp(500);
              $('.tab_3_section').slideDown(500);
              $('.tab_4_section').slideUp(500);

          });
          $(".tab_4_section_parent").on("click",function(e){
              $('.tab_1_section').slideUp(500);
              $('.tab_2_section').slideUp(500);
              $('.tab_3_section').slideUp(500);
              $('.tab_4_section').slideDown(500);

          });

          $(".input_click").on('click',function(e){

            $('.tab_1_section').slideUp(500);
              $('.tab_2_section').slideUp(500);
              $('.tab_3_section').slideUp(500);
              $('.tab_4_section').slideUp(500);
          });

          //side nav toggle button hide/show
          $("#aside-toggle-btn").click(function () {
            $("#aside-nav, main").toggleClass("active");
          });

          //aside nav dropdown caret icon rotate
          $("#aside-nav-ul .nav-link").click(function () {
            $(this).find(".dropdown-caret-svg").toggleClass("rotate-svg");
          });

          //aside nav > nav link remove/add active class on click
          $("#aside-nav-ul .nav-link").click(function () {
            $("#aside-nav-ul .nav-link").removeClass("active");
            $(this).addClass("active");
          });

          //click on one dropdown second one automatically hide and change svg icon to
          $("#aside-nav-ul").on("click", ".nav-item", function () {
            const liElement = $(this);
            liElement
              .siblings()
              .children()
              .children(".dropdown-caret-svg")
              .removeClass("rotate-svg");
            liElement
              .siblings()
              .children(".aside-dropdown-menu")
              .removeClass("show");
            if ($(this).hasClass("active")) {
              liElement
                .siblings()
                .children(".aside-dropdown-menu")
                .addClass("show");
            }
          });

          if ($(window).width() <= 767) {
            $("#aside-toggle-btn").click(function () {

              $("#aside-nav").toggle();
            });
            $("#times").click(function () {
              $("#aside-nav").toggle();
            });
          }
        });
      </script>

      <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }



// navbar click

$(document).ready(function(){


    // personal form show
    $(document).on("click",".personal_show",function(){

      $("#personal").removeClass("d-none");
      $("#personal").removeClass("hide_form");
      $("#skill").addClass("hide_form");
      $("#profile").addClass("hide_form");
      $("#employe").addClass("hide_form");
      $("#education").addClass("hide_form");
      $(".nav_ul li .active").removeClass("active");
      $(".nav_ul li .personal").addClass("active");
  })

    // personal form show
    $(document).on("click",".employee_show",function(){

      $("#personal").addClass("hide_form");
      $("#skill").addClass("hide_form");
      $("#profile").addClass("hide_form");
      $("#employe").removeClass("hide_form");
      $("#employe").removeClass("d-none");
      $("#education").addClass("hide_form");
      $(".nav_ul li .active").removeClass("active");
      $(".nav_ul li .employe").addClass("active");
  })


    // Skill form show
    $(document).on("click",".skill_show",function(){

      $("#personal").addClass("hide_form");
      $("#employe").addClass("hide_form");
      $("#profile").addClass("hide_form");
      $("#skill").removeClass("hide_form");
      $("#skill").removeClass("d-none");
      $("#education").addClass("hide_form");
      $(".nav_ul li .active").removeClass("active");
      $(".nav_ul li .skill").addClass("active");
  })
    // Education form show
    $(document).on("click",".education_show",function(){

      $("#personal").addClass("hide_form");
      $("#employe").addClass("hide_form");
      $("#profile").addClass("hide_form");
      $("#education").removeClass("hide_form");
      $("#education").removeClass("d-none");
      $("#skill").addClass("hide_form");
      $(".nav_ul li .active").removeClass("active");
      $(".nav_ul li .education").addClass("active");
  })


})


      </script>
@endsection
