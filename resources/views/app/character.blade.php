@extends('app')

@section('title')
    {{ $character->name }}
@endsection

@section('nav')
    @include('character.nav')

@endsection

@section('content')

    <div class="flex flex-col items-center rounded">
        {{-- @include('character.fightingtalents') --}}
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
        @include('character.magictricks')
    </div>
    {{-- @include('character.talents',[$t='0', $e='4']) --}}
    {{-- @include('character.talents',[$t='3', $e='4']) --}}


@endsection
