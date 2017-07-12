@extends('app')

@section('title')
    Charaktere
@endsection

@section('nav-center')
    <div class="container">
        <h1> Charaktere</h1>
        <p>Hier werden alle Charactere angezeigt, die in LazzyPHP gespeichert wurden.</p>

    </div>

@endsection

@section('content')

    <div class="container">

    </div>

    <div class="container">
        @foreach($characters as $character)
            <a href="character/{{$character->id}}" class="character-box">
                <h3>{{$character->name}}, {{$character->ap_total}} AP</h3>
                <p>{{$character->race}}, {{$character->profession}}</p>
            </a>
        @endforeach
    </div>
@endsection