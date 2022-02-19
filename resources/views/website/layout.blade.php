<!doctype html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting('site.title')}} | @yield('title', setting('site.title'))</title>
    <meta name="description" content="@yield('description', setting('site.description'))">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="MobileOptimized" content="320" />

    <!--=== Favicon Link ===-->
    <link rel="shortcut icon" type="image/png" href="{{asset(Voyager::image(setting('site.favicon')))}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset(Voyager::image(setting('site.favicon')))}}">

    <!-- Stylesheet -->
{{--    <link rel="stylesheet" href="{{mix('assets/css/app.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.pro.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style')
</head>
<body>

    @include('website.components.loader')

    @include('website.components.header')

    @yield('content')

    <x-footer/>

    <!-- ##### All Javascript Script ##### -->
{{--    <script src="{{mix('assets/js/app.js')}}"></script>--}}

    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- All Plugins js -->
    <script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/js/active.js')}}"></script>

    @yield('scripts')

    @if (session()->has('message'))
        <div class="alert closable alert-{{ session('message')['type'] }} alert-dismissible fade show position-absolute" style="top: 10%; right:50px; z-index: 999" role="alert">
            {!! session('message')['message'] !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

</body>
</html>
