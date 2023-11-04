<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ecommerce project">
    <meta name="robots" content="all,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/nouislider/nouislider.min.css')}}">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('frontend/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}">
    @yield('style')
    
</head>
<body>
    <div id="app" class="page-holder {{request()->routeIs('frontend.detail') ? 'bg-light' : null }}">
        
        <!-- navbar-->
        @include('partial.frontend.header')

        <div class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        @include('partial.frontend.footer')
    </div>

    <!--  Modal -->
    @include('partial.frontend.modal')

    <!-- JavaScript files-->
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{asset('frontend/js/front.js')}}"></script>
    @yield('script')
    
</body>
</html>
