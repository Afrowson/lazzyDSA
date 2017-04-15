@extends('base')

@section('title')
    {{($character->name)}}
@endsection

@section('content')
    <div>
        {{($character->name)}}



    </div>
@endsection