<!DOCTYPE html>
<html style="height: 100%">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('head')
    <title>LazzyDSA - @yield('title')</title>
</head>
<body style="height: 100%">
<div id="app" style="height: 100%">
    <div class="topbar columns is-marginless">
        <div class="column">
            @yield('nav-left')
        </div>
        <div class="column">
            @yield('nav-center')
        </div>
        <div class="column">
            @yield('nav-right')
        </div>
    </div>
    
    @yield('body')
</div>
@include('vars')
<script src="/js/app.js"></script>
</body>
</html>