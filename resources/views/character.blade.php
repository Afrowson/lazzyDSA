@extends('app')

@section('title')
    {{($character->name)}}
@endsection

@section('nav-left')
    @include('character.name')
@endsection
@section('nav-center')
    @include('character.energy')
@endsection
@section('nav-right')
    @include('character.skills')
@endsection

@section('content')

    <div class="is-pulled-left">
        @include('character.talents',[$t='0', $e='2'])
    </div>
    <div class="is-pulled-left">
        @include('character.talents',[$t='3', $e='4'])
    </div>
    <div class="is-pulled-right">
        @include('character.bio')
    </div>
    <div class="is-pulled-right">
        @include('character.fightingtalents')
    </div>

    <div class="is-pulled-right">
        @include('character.languages')
    </div>
    <div class="is-pulled-right">
        @include('character.calculateables')
    </div>
    <div class="is-pulled-right">
        @include('character.benefices')
    </div>
    <div class="is-pulled-right">
        @include('character.specialtalents')
    </div>

    <div class="is-pulled-left">
        @include('character.weapons')
    </div>

    <div class="is-pulled-right">
        @include('character.magictricks')
    </div>
    <div class="is-pulled-left">
        @include('character.inventory')
    </div>


@endsection
