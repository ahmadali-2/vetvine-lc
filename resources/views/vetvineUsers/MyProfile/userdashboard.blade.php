@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
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
                <h6>City<span class="asteric">*</span></h6>
                <input type="text" name="city" id="city" value="{{$employmentInfo->city ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error11"></span>
              </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h6>Work Phone Number<span class="asteric">*</span></h6>
                <input type="number" name="work_phone" id="work_phone" value="{{$employmentInfo->work_phone ?? ''}}" placeholder=""  class="form-control" />
                <span class="asteric" id ="error13"></span>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12 mt-5">
          <!-- <button type="button" class="dashboard-btn mr-3">Save & Complete Later</button> -->
          <button type="button" class="dashboard-btn" id="employe_btn">Save & Continue</button>
        </div>
      </div>
    </div>

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
            $("#error1").html("First name field can't be left blank.");

            $(this).closest('div').find('#error1').show();
        }
    });
    $('#lastname').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error2').hide();
        }
        else {
            $("#error2").html("Last name field can't be left blank.");
            $(this).closest('div').find('#error2').show();
        }
    });
    $('#licensure').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error3').hide();
        }
        else {
            $("#error3").html("Licensure field can't be left blank.");
            $(this).closest('div').find('#error3').show();
        }
    });
    $('#street_address').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error6').hide();
        }
        else {
            $("#error6").html("Street address field can't be left blank.");
            $(this).closest('div').find('#error6').show();
        }
    });
    $('#business_name').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error7').hide();
        }
        else {
            $("#error7").html("Business name field can't be left blank.");

            $(this).closest('div').find('#error7').show();
        }
    });
    $('#business_email').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error8').hide();
        }
        else {
            $("#error8").html("Business email field can't be left blank.");
            $(this).closest('div').find('#error8').show();
        }
    });
    $('#country').on('click', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error9').hide();
        }
        else {

            $("#error9").html("Country field can't be left blank.");
            $(this).closest('div').find('#error9').show();
        }
    });
    $('#city').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error11').hide();
        }
        else {
            $("#error11").html("City field can't be left blank.");
            $(this).closest('div').find('#error11').show();
        }
    });
    $('#work_phone').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error13').hide();
        }
        else {
            $("#error13").html("Work phone field can't be left blank.");
            $(this).closest('div').find('#error13').show();
        }
    });
    $(document).ready(function(e){
    $("#personal_btn").on("click",function(e){
    if($.trim($('#firstname').val()) == '' || $.trim($('#lastname').val()) == '' || $.trim($('#licensure').val()) == '')
    {
        toastr.error('Make sure compulsory fields are not empty.');
      return;
   }
   else{
     $("#personal").addClass('d-none');
     $("#employe").removeClass('d-none');
     $("#employe").removeClass('hide_form');
     $(".nav_ul li .active").removeClass("active");
     $(".nav_ul li .employe").addClass("active");
     $(".personal").addClass("personal_show");
   }
    })
    $("#employe_btn").on("click",function(e){

    if( $.trim($('#street_address').val()) == '' || $.trim($('#business_name').val()) == '' || $.trim($('#business_email').val()) == ''
    || $('#country option:selected').val() == '' || $.trim($('#city').val()) == ''
    || $.trim($('#work_phone').val()) == '')
    {
        toastr.error('Make sure compulsory fields are not empty.');
      return;
    }
   else{
     $("#employe").addClass('d-none');
     $(".employe").addClass('employee_show');
     $("#profile").removeClass('d-none');
     $("#profile").removeClass('hide_form');
     $(".nav_ul li .active").removeClass("active");
     $(".nav_ul li .profile").addClass("active");
    }
    })
     $("#submit_btn").on("click",function(e){
        e.preventDefault();
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

})


      </script>
@endsection
