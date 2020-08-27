@extends('app')

@section('title')
    {{ $character->name }}
@endsection

@section('nav')
    <a href="/index" class="button">Zurück</a>
    <div class="position:fixed">
        @include('character.name')
    </div>
    <div>
        @include('character.energy')
    </div>

    @include('character.skills')
@endsection

@section('content')
    <div class="flex flex-col md:flex-row md:flex-wrap items-center rounded">
        @include('character.fightingtalents')
        @include('character.benefices')
        @include('character.handicaps')
        @include('character.bio')
        @include('character.calculateables')
        @include('character.languages')
        @include('character.inventory')
        @include('character.purse')
        @include('character.letterings')
        @include('character.specialtalents')
        @include('character.weapons')
    </div>
    @include('character.talents',[$t='0', $e='4'])
    @include('character.talents',[$t='3', $e='4'])
    @include('character.magictricks')

@endsection
