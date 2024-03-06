<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/solid.min.css">
    <link rel="stylesheet" href="/css/brands.min.css">

    <title>!!FormsBoot</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('head')
    <br>
    Root HTML
    <div >
        <!-- yuild sign_up -->
        @yield('sign_up')
        <!-- yield test -->
        @yield('test')
        <!-- yuild login -->
        @yield('login')
    </div>
    @include('footer')
</body>
@vite('resources/js/app.js')
</html>
