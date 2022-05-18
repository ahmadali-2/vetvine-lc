<!DOCTYPE html>

<html lang="en">



<head>

  <!-- ************************************************************************ !-->

  <!-- ****                                                              **** !-->

  <!-- ****       ¤ Designed and Developed by  LEADconcept               **** !-->

  <!-- ****               http://www.leadconcept.com                     **** !-->

  <!-- ****                                                              **** !-->

  <!-- ************************************************************************ !-->

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>VETVINE</title>

  <script src="{{ asset('vendor/ckeditor/ckeditor.js')}}"></script>

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <style>

    .nav-wrapper-one a {

      padding: 5px 30px 5px !important;

    }

    @media (max-width:991px) and (min-width:768px){

      .nav-wrapper-one a {

padding: 0px 30px 0px !important;

}
    }

  </style>

@notifyCss

@toastr_css

@yield('extra_css')

</head>



<body>




@include('common.deletemodal')

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')



  <!-- </footer> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{asset('bootstrap/jquery/popper.min.js')}}"></script>



<script src="{{ asset('frontend/js/bootstrap.js')}}"></script>

<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>



<script src="https://kit.fontawesome.com/b8867474d2.js" crossorigin="anonymous"></script>

<script src="{{ asset('frontend/js/fontawesome.js')}}"></script>

<script src="{{ asset('frontend/js/frontend.js')}}"></script>



<script>

  CKEDITOR.replace( 'description' );

</script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\Frontend\RegistrationRequest', '#regform') !!}

@yield('scripts')



@toastr_js

@toastr_render

   @notifyJs



<x:notify-messages />

@if(Route::currentRouteName() === 'login')

  <script>

    $( document ).ready(function() {

      $('#login-modal').modal('show');

    });

  </script>

@endif

@if(Route::currentRouteName() !== 'password.request')

@if (count($errors) > 0 )

@if($errors->has('email') || $errors->has('password'))

    <script type="text/javascript">

        $( document ).ready(function() {

             $('#login-modal').modal('show');

             $('#errormsg').css({

               'display':'block'

             });

             $('#errormsg').html(`<strong>Error</strong> User Credentials Does Not Match , Try Again`);

        });

    </script>

  @endif

  @endif

  @endif
  <script>
    const deleteRecord = (id, uri) => {
    document.getElementById('identity').value ;
    let route = window.location.origin + uri + id;
    document.getElementById('deleteForm').setAttribute('action', route)
    $('#deleteModal').modal('show')
}
</script>
</body>
</html>



