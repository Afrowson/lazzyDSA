<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">


                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
