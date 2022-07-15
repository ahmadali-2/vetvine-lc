@php

$vetvineLogo = vetvineHelper::vetvineGeneralSetting();

@endphp

<!doctype html>

<html class="no-js" lang="en">

<head>

    @include('admins.layouts._head')
    <style>
        #menuToggle {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <aside id="left-panel" class="left-panel">

        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fa fa-bars"></i>

                </button>

                @if ($vetvineLogo === null)
                    <a class="navbar-brand" href="./"><img src="{{ asset('admin/images/logo.png') }}"
                            alt="Logo"></a>
                @else
                    <a class="navbar-brand" href="./"><img
                            src="{{ asset('admin/generalsetting/' . $vetvineLogo->logo) }}" alt="Logo"></a>
                @endif

                <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/logo2.png') }}"
                        alt="Logo"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                @include('admins.layouts._sidebar')

            </div>

        </nav>

    </aside>



    <div id="right-panel" class="right-panel">

        <header id="header" class="header">

            <div class="header-menu">

                @include('admins.layouts._topnavbar')

                @include('common.deletemodal')

            </div>

        </header>

        <div class="breadcrumbs">

            <div class="col-sm-4">

                <div class="page-header float-left">

                    <div class="page-title">

                        <h1>Dashboard</h1>

                    </div>

                </div>

            </div>
            <div class="col-sm-8">

                <div class="page-header float-right">

                    <div class="page-title">

                        <ol class="breadcrumb text-right">

                            {{-- <li class="active">Dashboard</li> --}}

                        </ol>

                    </div>

                </div>

            </div>

        </div>

        <div class="content mt-3">

            @yield('content')

        </div>

    </div>

    @include('notify::components.notify')

    @include('admins.layouts._footerscripts')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    @yield('scripts')

    @stack('scripts')

    {{-- @section('scripts') --}}



</body>

</html>
