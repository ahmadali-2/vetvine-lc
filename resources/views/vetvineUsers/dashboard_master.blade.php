<!DOCTYPE html>

<html lang="en">



<head>





  @include('vetvineUsers.layouts.head')



</head>



<body>

  <header class="main-wrapper">

    <div class="top_Wrapper">

      <div class="container">



      @include('vetvineUsers.layouts.topnavbar')

      @include('common.deletemodal')

    </div>

        </p>

      </div>

    </div>



    <div class="container-fluid p-0">

      <div class="container">

        <nav class=" bg-header navbar navbar-expand-md">

          <a class="navbar-brand" href="{{ url('/') }}">

            <span class="header-logo">

              <img src="{{asset('frontend/img/logo.png')}}" class="img-fluid logo" alt="" srcset="">

            </span>

          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon">

              <img src="{{asset('frontend/img/menu-icon.png')}}" width="25" height="18" alt="">

            </span>

          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav nav-wrapper-one">

              <li class="nav-item active">

                <a class="nav-link" href="#">grow <span class="sr-only">(current)</span>

                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="#">thrive</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="#">heal</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="#"> why vetvine?</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="#"> contact</a>

              </li>

            </ul>

          </div>

        </nav>

      </div>

    </div>

  </header>







  <div class="dashboard-header">

    <h5>Dashboard</h5>



    <div class="user-avatar-profile">
        <img src="@if(Auth::user()->profile_photo) {{ asset('/frontend/images/Profile-Images/'.Auth::user()->profile_photo)}} @else
                    {{asset('frontend/img/profile-avatar.png')}} @endif" alt="" id="user-image" height="200px">
      {{-- <img src="{{asset('frontend/img/profile-avatar.png')}}" alt="avatar" /> --}}

    </div>

  </div>



  <section id="wrapper" class="main_dash">

    <!-- aside nav-->

    @include('vetvineUsers.layouts.sidebar')

    <!-- /aside nav-->



    <!-- === main === -->

    <main class="w-100 bg-light d-flex flex-column" id="main">

      <!-- === header === -->

      <header id="header-navbar" class="w-100 side_pag px-4 pt-4">

        <nav class="navbar navbar-expand w-100 mob_nav accepet-rej-nav">

          <div class="container-fluid">

            <div class="mobile-wrap">

              <div class="d-flex align-items-center">

                <div class="border rounded-circle shadow-sm p-2" id="aside-toggle-btn">

                  <!-- svg -->

                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list"

                    viewBox="0 0 16 16">

                    <path fill-rule="evenodd"

                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />

                  </svg>

                  <!-- /svg -->

                </div>

              </div>

            </div>

          </div>

        </nav>

      </header>











      @yield('dashboardcontent')



      </div>

    </main>

    <!-- === /main === -->

  </section>



  <!-- footer start  -->

  @include('notify::components.notify')

  @include('vetvineUsers.layouts.footer')

  @yield('scripts')

</body>



</html>

