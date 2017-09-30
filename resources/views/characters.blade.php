@extends('app')

@section('title')
    Charaktere
@endsection

@section('nav-center')
    <div class="hero is-primary">
        <h1 class="title is 3 is-marginless">Deine Helden</h1>
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
            <div href="character/{{$character->id}}" class="character-box">
                <h3>{{$character->name}}, {{$character->ap_total}} AP</h3>
                <p>{{$character->race}}, {{$character->profession}}</p>
                <a href="/character/{{$character->id}}/editCharacter" class="button is-primary">Bearbeiten</a>
                <a href="/character/{{$character->id}}/show" class="button is-primary">Anzeigen</a>
            </div>
        @endforeach
        <a href="/character/create" class="character-box">
            Erstelle einen neuen Helden
        </a>
    </div>

@endsection

@section('nav-left')
    <a href="/index" class=" button is-info">Deine Helden</a>
    <a href="/database" class="button is-info">Datenbank</a>
@endsection