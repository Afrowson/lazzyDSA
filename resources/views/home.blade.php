@extends('base')


@section('nav-center')
    <h1 class="title primary"> Lazzy DSA</h1>
    @if (!Auth::guest())
        <h1 class="primary">Hallo {{Auth::user()->name}}</h1>
    @endif

@endsection

@section('nav-right')
    @if (Auth::guest())
        <a class="button is-danger" href="{{ route('login') }}">Login</a>
        <a class="button is-warning" href="{{ route('register') }}">Register</a>
    @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <button class="button is-info" type="submit" href="{{ route('logout') }}">Logout</button>
        </form>
    @endif
@endsection

@section('nav-left')
    @if (!Auth::guest())
        <a href="/index" class=" button is-info">Deine Helden</a>

        <a href="/database" class="button is-info">Datenbank</a>
    @endif
@endsection

@section('content')

@endsection
