<!DOCTYPE html>
<html style="height: 100%" class="bg-gray-900">
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
<body style="height: 100%">
<div @yield('vue-id') style="height: 100%">
    <div class="">
        <div class="{{-- column --}}">
            @yield('nav-left')
        </div>
        <div class="flex flex-row items-center justify-center fixed w-screen bg-green-200  h-12 sm:h-12 md:h-16 lg:h-16 m-0">
            @yield('nav-center')
        </div>
        <div class="{{-- column --}}">
            @yield('nav-right')
        </div>
    </div>
    
    @yield('body')
</div>
@include('vars')
<script src="/js/app.js"></script>
</body>
</html>