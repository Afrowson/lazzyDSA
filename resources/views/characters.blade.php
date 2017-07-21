@extends('app')

@section('title')
    Charaktere
@endsection

@section('nav-center')
    <div class="hero is-primary">
        <h1 class="title is 2">Deine Charaktere</h1>
        <p>Hier werden alle deine Charactere angezeigt.</p>
    </div>
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

@section('content')

    <div class="container">
        @foreach($characters as $character)
            <a href="character/{{$character->id}}" class="character-box">
                <h3>{{$character->name}}, {{$character->ap_total}} AP</h3>
                <p>{{$character->race}}, {{$character->profession}}</p>
            </a>
        @endforeach
    </div>
@endsection