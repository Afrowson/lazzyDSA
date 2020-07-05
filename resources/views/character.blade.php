@extends('app')

@section('title')
    {{($character->name)}}
@endsection

@section('nav-center')
    <div class="position:fixed">
    @include('character.name')
    </div>
    <div>
     {{-- @include('character.energy') --}}
    </div>
@endsection

{{-- @section('nav-right')
    @include('character.skills')
@endsection --}}

@section('content')
    <div class="{{-- is-clearfix --}} flex flex-col items-center rounded">
        @include('character.fightingtalents')
        @include('character.benefices')
        @include('character.handicaps')
        @include('character.bio')
        @include('character.calculateables')
        @include('character.languages')
        @include('character.letterings')
        @include('character.inventory')
        @include('character.purse')
        @include('character.specialtalents')
        @include('character.weapons')
    </div>
    @include('character.talents',[$t='0', $e='4'])
    {{--    @include('character.talents',[$t='3', $e='4'])--}}
    @include('character.magictricks')

@endsection

@section('sidebar')
    <a href="/index" class="button">Deine Helden</a>
    
    <a href="/diary" class="button">Tagebuch</a>

    <a href="/character/{{$character->id}}/edit" class="button">Bearbeiten</a>
@endsection
