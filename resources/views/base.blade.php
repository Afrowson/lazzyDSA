<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>
    @yield('head')
    <title>LazzyDSA - @yield('title')</title>
</head>

<body class="bg-gray-900">
    <div @yield('vue-id')>

        @yield('nav')

        @yield('content')
    </div>
    @include('vars')
    <script src="/js/app.js"></script>
</body>

</html>
