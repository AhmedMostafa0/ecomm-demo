<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>







    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <link href="{{ asset('Admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/material-dashboard.css') }}" rel="stylesheet">
</head>
<body>


    <div class="wrapper">

        @include('layouts.includes.sidebar')

        <div class="main-panel">

            @include('layouts.includes.navbar')

            <div class="content">

            @yield('content')
            </div>

            @include('layouts.includes.footer')
            </div>
    </div>






  <script src="{{asset('Admin/assets/js/jquery.min.js')}}" defer></script>
  <script src="{{asset('Admin/assets/js/popper.min.js')}}" defer></script>
  <script src="{{asset('Admin/assets/js/bootstrap-material-design.min.js')}}" defer></script>
  <script src="{{asset('Admin/assets/js/perfect-scrollbar.jquery.min.js')}}" defer></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if (session('status'))
   <script>

     swal("{{ session('status') }}");
   </script>
  @endif

@yield('scripts')

</body>
</html>
