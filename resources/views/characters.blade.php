@extends('base')

@section('title')
    Charaktere
@endsection

@section('header')
    <div class="container">
        <h1> Charaktere</h1>
        <p>Hier werden alle Charactere angezeigt, die in LazzyPHP gespeichert wurden.</p>

    </div>

@endsection

@section('content')

    <div class="container">
        <a href="character/new" class="btn btn-success">
            Neuen Charakter anlegen
        </a>
    </div>

    <div class="container">
        @foreach($characters as $character)
            <a href="character/{{$character->id}}" class="characterbox">
                <h3>{{$character->name}}, {{$character->ap_total}} AP</h3>
                <p>{{$character->race}}, {{$character->profession}}</p>
            </a>
        @endforeach
    </div>
@endsection