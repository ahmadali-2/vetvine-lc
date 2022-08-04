   <meta charset="utf-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <title>vetvine- Dashboard</title>

   <meta name="description" content="Sufee Admin - HTML5 Admin Template">

   <meta name="viewport" content="width=device-width, initial-scale=1">



   <link rel="apple-touch-icon" href="apple-icon.png">

   <link rel="shortcut icon" href="favicon.ico">

   {{-- <link rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
       integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
       crossorigin="anonymous" /> --}}

   <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css ') }}">

   <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
       rel="stylesheet">

  {{-- chatiy meta links --}}
  @if (ROUTE::current()->uri == 'chatify')
      <meta name="id" content="{{ $id }}">
      <meta name="type" content="{{ $type }}">
  @endif
  {{-- <meta name="messenger-color" content="{{ $messengerColor }}"> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="url" content="{{ url('') . '/' . config('chatify.routes.prefix') }}"
      data-user="{{ Auth::user()->id }}">


   <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}">

   <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css') }}">

   <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">

   <link rel="stylesheet" href="{{ asset('admin/vendors/selectFX/css/cs-skin-elastic.css') }}">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" />

   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        {{-- chatify additonal css --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script> --}}
    <script src="{{ asset('js/chatify/autosize.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

    {{-- styles --}}
    <link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css' />
    <link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />

   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <style>
       .bootstrap-tagsinput {
           background: none !important;
           border: 1px solid #ced4da !important;
           border-radius: 3px !important;
           padding: 5px !important;
       }

       .tag {
           background: #f27222 !important;
           border-radius: 3px !important;
           padding: 3px 6px !important;
           color: #fff !important;
       }
   </style>

   @toastr_css

   @notifyCss
