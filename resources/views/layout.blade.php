<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', setting('site.description'))">
    <meta name="keywords" content="@yield('keyword', setting('site.keywords'))">
    <title>@yield('title', setting('site.title'))</title>
    <!-- Favicon -->
    <link rel="icon" href="{{setting('site.favicon')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/notify.css') }}">
    @yield('style')
</head>

<body>

@include('frontend.static.loader')

@yield('content')

@include('frontend.static.scrtipts')

@yield('scripts')

</body>

</html>
