<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assests/css/styles.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layouts.inc.admin-navbar')
    <div id="layoutSidenav">
    @include('layouts.inc.admin-sidebar')

   </div>
   
                    @yield('content')
                
              
            
  
</body>
<script src="{{ asset('assests/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assests/js/scripts.js') }}"></script>
       
</html>
