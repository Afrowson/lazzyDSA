@extends('base')

@section('body')

    <div class="is-pulled-left primary-b" style="width: 200px; height: 100%">
        @yield('sidebar')
    </div>

    @yield('content')


@endsection