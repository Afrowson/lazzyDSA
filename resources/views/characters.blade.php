@extends('base')

@section('title')
    Charaktere
@endsection

@section('content')
    <div id="charactersbox">
        <div>
            @foreach($characters as $character)
                <li>{{$character}}</li>
            @endforeach

        </div>
    </div>
@endsection