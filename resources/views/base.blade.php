<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
    <title>LazzyDSA - @yield('title')</title>
</head>
<body>
<div>
    @yield('header')

    @yield('siedebar')

    @yield('content')
</div>
</body>
</html>