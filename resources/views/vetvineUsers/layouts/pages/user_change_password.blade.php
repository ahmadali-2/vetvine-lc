@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')

<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 field_none">
            <a href="#"><img src="{{ asset('frontend/img/add-img.png') }}">
            </a>
        </div>

          <div class="col-lg-6 change_password">
               <div class="content">
                <h2>Change Your Password</h2>

                <form action="">

                      <div class="form-group">
                        <label for="">Enter Your Old Password</label>
                        <input type="password">
                      </div>
                      <div class="form-group">
                        <label for="">Enter Your New Password</label>
                        <input type="password">
                      </div>
                      <div class="form-group">
                        <label for="">Confirm  Password</label>
                        <input type="password">
                      </div>

                </form>

                <div class="btn_change text-center">
                    <button class="btn btn-warning">Change Password</button>
                </div>
               </div>
          </div>



        <div class="col-lg-3">
            <a href="#"><img src="{{ asset('frontend/img/add-img.png') }}">
            </a>
        </div>
    </div>
</div>


@endsection
