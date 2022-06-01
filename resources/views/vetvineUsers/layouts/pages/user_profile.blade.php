@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')
  <!-------sidbar------>
  <div class="container sidebar-new">
    <div class="row no-gutters">
      <div class="col-12 col-sm-12 col-lg-3 col-xl-2 sidebar-new-bg pt-4">
        <div class="user-img">
          <img src="{{ asset('frontend/img/profile-pic.png') }}" alt="hi">
          <h4>Sheri Berger</h4>

        </div>
        <div class="nav-bg">
          <ul class=" nav navs-tabs " role="tablist">
            <li class="listItemA "><a href="#tabs-1" role="tab" data-toggle="pill"><i class="fas fa-chevron-right"></i>
                Personal Information</a>
            </li>
            <li class="listItemA"><a href="#tabs-2" role="tab" data-toggle="pill" class="active"><i
                  class="fas fa-chevron-right"></i>
                Contact Information</a></li>
            <li class="listItemA"><a href="#tabs-3" role="tab" data-toggle="pill"><i class="fas fa-chevron-right"></i>
                Edit My Photo</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-lg-9 col-xl-10 tab-content">

        <div class="tab-pane" id="tabs-1">
          <div class="general-area">
            <div class="row no-gutters">
              <div class="col-md-9 profile">

                <div class="general-area placeholder2_label">

                  <div class="serch-section ">
                    <div class="inner-input ">
                      <label>First Name*</label>
                      <input type="text" placeholder="Sheri">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Last Name*</label>
                      <input type="text" placeholder="Berger">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>I am a*</label>
                      <input type="text" placeholder="Veterinary specialist">
                    </div>
                  </div>




                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Licensure State(s) & Numbers (s)*</label>
                      <input type="text" placeholder="NY 1234">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Timezone</label>
                      <input type="text" placeholder="(UTC-5 Eastern tIME (us & cANADA))">
                    </div>
                  </div>



                  <div class="button col-sm-12 text-center"><button type="button" class="btn btn-Continue">Edit My
                      Profile</button></div>


                </div>


              </div>
              <div class="col-md-3 add-img p-md-0">
                <a href="#"><img src="{{ asset('frontend/img/add-img.png') }}" class="img-fluid"></a>
              </div>
            </div>

          </div>

        </div>
        <div class="tab-pane active in" id="tabs-2">

          <div class="general-area">
            <div class="row no-gutters">
              <div class="col-md-9 profile">

                <div class="general-area">

                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Email Address*</label>
                      <input type="text" placeholder="sibfv@gmail.com">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Confrim Address*</label>
                      <input type="text" placeholder="sibfv@gmail.com">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Primary Phone Number*</label>
                      <input type="text" placeholder="646 489">
                    </div>
                  </div>

                  <h2 class="heading_employment">Employment Info</h2>



                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Hospital or Business Name</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Country</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Adress</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>City</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>State</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="serch-section">
                    <div class="inner-input">
                      <label>Zip or Postal Code</label>
                      <input type="text" placeholder="">
                    </div>
                  </div>

                  <div class="button col-sm-12 text-center"><button type="button" class="btn btn-Continue">Edit My
                      Profile</button></div>
                </div>


              </div>
              <div class="col-md-3 add-img p-md-0">
                <a href="#"><img src="{{ asset('frontend/img/add-img.png') }}" class="img-fluid"></a>
              </div>
            </div>

          </div>


        </div>
        <div class="tab-pane" id="tabs-3">

          <div class="general-area">
            <h2>Edit My Profile</h2>
          </div>


        </div>

      </div>
    </div>
  </div>
@endsection
