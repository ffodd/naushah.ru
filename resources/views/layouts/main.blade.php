<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Start favicon -->
    <!-- Обязательный (и достаточный) тег для браузеров -->
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">

    <!-- Дополнительные иконки для десктопных браузеров -->
    <link type="image/png" sizes="16x16" rel="icon" href="/icons/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/icons/favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/icons/favicon-96x96.png">
    <link type="image/png" sizes="120x120" rel="icon" href="/icons/favicon-120x120.png">

    <!-- Иконки для Android -->
    <link type="image/png" sizes="72x72" rel="icon" href="/icons/android-icon-72x72.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/icons/android-icon-96x96.png">
    <link type="image/png" sizes="144x144" rel="icon" href="/icons/android-icon-144x144.png">
    <link type="image/png" sizes="192x192" rel="icon" href="/icons/android-icon-192x192.png">
    <link type="image/png" sizes="512x512" rel="icon" href="/icons/android-icon-512x512.png">
    <link rel="manifest" href="/manifest.json">

    <!-- Иконки для iOS (Apple) -->
    <link sizes="57x57" rel="apple-touch-icon" href="/icons/apple-touch-icon-57x57.png">
    <link sizes="60x60" rel="apple-touch-icon" href="/icons/apple-touch-icon-60x60.png">
    <link sizes="72x72" rel="apple-touch-icon" href="/icons/apple-touch-icon-72x72.png">
    <link sizes="76x76" rel="apple-touch-icon" href="/icons/apple-touch-icon-76x76.png">
    <link sizes="114x114" rel="apple-touch-icon" href="/icons/apple-touch-icon-114x114.png">
    <link sizes="120x120" rel="apple-touch-icon" href="/icons/apple-touch-icon-120x120.png">
    <link sizes="144x144" rel="apple-touch-icon" href="/icons/apple-touch-icon-144x144.png">
    <link sizes="152x152" rel="apple-touch-icon" href="/icons/apple-touch-icon-152x152.png">
    <link sizes="180x180" rel="apple-touch-icon" href="/icons/apple-touch-icon-180x180.png">

    <!-- Иконки для MacOS (Apple) -->
    <link color="#e52037" rel="mask-icon" href="/icons/safari-pinned-tab.svg">

    <!-- Иконки и цвета для плиток Windows -->
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="/icons/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="/icons/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/icons/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/icons/mstile-310x310.png">
    <meta name="msapplication-square310x310logo" content="/icons/mstile-310x150.png">
    <meta name="application-name" content="My Application">
    <meta name="msapplication-config" content="/icons/browserconfig.xml">
    <!-- Finish favicon -->

    @yield('seo')
 
    <!-- Start styles -->
        @include('include.styleLoader')
        @stack('style')
        <link rel="manifest" href="/build/manifest.json">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Finish styles -->

    <title>@yield('title')</title>

    <!-- Start script -->
    @include('include.scriptLoader')
    @stack('scriptsHead')
    <!-- Finish script -->
  </head>

  <body class="">

    @include('include.loadArea')

    @yield('header')

    @yield('content')

    @yield('footer')

    <!-- Start script -->
    @stack('scriptsFooter')
    <!-- Finish script -->

  </body>

</html>