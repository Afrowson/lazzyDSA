<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#diary'
        });
    </script>
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