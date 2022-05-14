<aside class="shadow-sm" id="aside-nav">

      <!-- aside logo brand -->

      <div class="container times_cont">

        <div class="row">

          <div class="col-12 pt-3">

            <div class="text-right">

              <i class="fas fa-times text-white pr-2" id="times"></i>

            </div>

          </div>

        </div>

      </div>

      <!-- aside nav ul list -->

      <ul class="nav flex-column nav_ul" id="aside-nav-ul">

        <li>

          <a href="javascript:void(0)" class="dropdown-btn" style="display: flex; justify-content: space-between;">

            <div>

              <i class="fa fa-angle-right" aria-hidden="true"></i> My Profile

            </div>

            <i class="fa fa-caret-down"></i>

          </a>

          <div class="dropdown-container">

            <a href="{{ route('personelinfo.create') }}">Personal Info</a>

            <a href="{{ route('employmentInfo.create') }}">Employment Info</a>

            <a href="{{ route('skillsexpertise.create')}}">Skills & Expertise</a>

            <a href="{{ route('education.create') }}">Education</a>

            <a href="{{ route('editPhoto.create') }}">Edit My Photo</a>

          </div>

        </li>

      

        <li>

            <a href="javascript:void(0)" class="dropdown-btn" style="display: flex; justify-content: space-between;">

                <div>

                  <i class="fa fa-angle-right" aria-hidden="true"></i>Post Management

                </div>

                <i class="fa fa-caret-down"></i>

              </a>

              <div class="dropdown-container">

                <a href="{{ route('post.index') }}">View Post</a>

              </div>

          </li>

       

        <li>

          <a href="{{route('usermemberships.index')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> MemberShip Plans</a>

        </li>

        <li>

            <a href="javascript:void(0)" class="dropdown-btn" style="display: flex; justify-content: space-between;">

              <div>

                <i class="fa fa-angle-right" aria-hidden="true"></i> Settings

              </div>

              <i class="fa fa-caret-down"></i>

            </a>

            <div class="dropdown-container">

              <a href="{{ route('general.create') }}">General</a>

              <a href="{{ route('privacy.create') }}">Privacy</a>

              <a href="">Notifications</a>

              <a href="">Memebership Plan</a>

              <a href="">Change Password</a>

              <a href="">Delete Account</a>

            </div>

          </li>

      </ul>

    </aside>

