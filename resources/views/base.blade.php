<!DOCTYPE html>
<html class="min-h-screen">

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        window.Laravel = {{ json_encode(['csrfToken' => csrf_token(),]) }}
    </script>
    @yield('head')
    <title>LazzyDSA - @yield('title')</title>
</head>

<body class="min-h-screen" class="bg-gray-900">
    <div @yield('vue-id') class="min-h-screen bg-gray-900">

        @yield('nav',view('nav'))

        @yield('content')
    </div>
    @include('vars')
    <script src="/js/app.js"></script>
</body>

</html>
