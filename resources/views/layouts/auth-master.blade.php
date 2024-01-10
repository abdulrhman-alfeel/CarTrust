<!doctype html>
<html lang="en">
<head>
    <meta name=”4uprint”>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#348CD2" />
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>4uprint</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x192.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x128.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon_x96.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css' />

</head>
<body>
    @include('layouts.partials.navbarpost')
  
    <div class="parallax-window" style="overflow: hidden">  
          
        @yield('content')     
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="row" style="margin: auto">
                <div class="col-lg-2 col-md-3 col-12">
                    <a class="navbar-brand" >
                        <img src="{{url('images')}}/4u2.png" class="logo-image img-fluid" alt="templatemo pod talk">
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3"> م/عبدالرحمن الفيل </h6>
                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> +97775227593</p>
                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">abrhman2010@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Page footer -->
         {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="../js/app.js"></script> --}}
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.min.js') }}"defer></script>
    <script src="{{ asset('/js/parallax.min.js') }}"defer></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"defer></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"defer></script>
    <script src="{{ asset('/js/custom.js') }}"defer></script>
    <script src="{{ asset('/js/print.js') }}"defer></script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>
</html>
