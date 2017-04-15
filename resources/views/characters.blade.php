@extends('base')

@section('title')
    Charaktere
@endsection

@section('content')
    <div>

            @foreach($characters as $character)
            <a href="character/{{$character->id}}" class="characterbox">
                <h1>{{$character->name}}, 1135 AP</h1>
                <h3>{{$character->race}}, {{$character->profession}}</h3>
            </a>
            @endforeach


    </div>
@endsection