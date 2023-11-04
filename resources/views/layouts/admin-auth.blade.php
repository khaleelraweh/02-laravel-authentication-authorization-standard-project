<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Multipurpose Admin & Dashboard Template"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all,follow">
    <meta name="author" content="khaleelRaweh"  />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Login | {{ config('app.name', 'Laravel') }} - Admin & Dashboard Template </title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backend/css/icons-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('backend/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('style')
</head>
<body class="auth-body-bg">

  <div class="bg-overlay"></div>

  <div id="app" class="wrapper-page">
      
      <div class="container-fluid p-0">
            @yield('content')
      </div>
      
  </div>

  <!-- JAVASCRIPT -->
  <script src="{{asset('backend/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/libs/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('backend/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/libs/node-waves/waves.min.js')}}"></script>

  <script src="{{asset('backend/js/app.js')}}"></script>
  @yield('script')
</body>
</html>
