<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    @if (Auth::check())
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endif

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/prism.css">
    @if (Auth::check())
        @include('admin.elements.elementscripts')
    @endif
    @stack('elementsStyles')
    @if (Auth::check())
        <link rel="stylesheet" href="/css/admin.css">
    @endif
    @yield('templateStyles')
    @yield('head_code')
    @if (Auth::check())
        <script>
            var options = {};
        </script>
    @endif
  </head>

  <body>
    @yield('body_start_code')

    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

    <script src="/js/app.js"></script>
    <script src="/js/prism.js"></script>
    @if (Auth::check())
        <script src='/js/vendor/tinymce/tinymce.min.js'></script>
        <script src='/js/admin.js'></script>
    @endif
    @yield('templateScripts')
    @stack('elementsScripts')
    @yield('body_end_code')
  </body>
</html>
