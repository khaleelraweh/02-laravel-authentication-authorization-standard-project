<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Premium Multipurpose Admin & Dashboard Template"  />
    <meta name="robots" content="all,follow">
    <meta name="author" content="Themesdesign"  />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <title> Dashboard | {{ config('app.name', 'Laravel') }} - Admin & Dashboard Template </title>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- jquery.vectormap css -->
    <link href="{{asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  

    <!-- Bootstrap Css -->
    {{-- <link href="{{asset('backend/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('backend/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- App Css-->
    {{-- <link href="{{asset('backend/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
    <link href="{{asset('backend/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" /> 
    @yield('style')
</head>
<body data-topbar="dark">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <div id="app">

      <!-- Begin page -->
      <div id="layout-wrapper">

        <!-- start  page-topbar -->
        @include('partial.backend.topbar')
        <!-- end  page-topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('partial.backend.vertical-menu')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

          <div class="page-content">

            <div class="container-fluid">
              @yield('content')
            </div>

          </div>
          <!-- End Page-content -->
          @include('partial.backend.footer')

        </div>
        <!-- end main content-->


      </div>
      <!-- END layout-wrapper -->

      <!-- Right Sidebar -->
      @include('partial.backend.rightbar')
      <!-- /Right-bar -->

      <!-- Right bar overlay-->
      <div class="rightbar-overlay"></div>

    </div>

    

    <!-- JAVASCRIPT -->
    <script src="{{asset('backend/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    
    <!-- Responsive examples -->
    <script src="{{asset('backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('backend/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/app.js')}}"></script>
    @yield('script')
    
    
</body>
</html>
