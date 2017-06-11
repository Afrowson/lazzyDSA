@extends('base')

@section('title')
    {{$character->name}}'s Tagebuch
@endsection

@section('header')
    <div class="header-wrapper clearfix">
        <div class=" pull-left header-name-wrapper">
            @include('character.name')
        </div>

        <div class=" pull-left header-energy-wrapper">
            @include('character.energy')
        </div>

        <div class="pull-right header-skillbox-wrapper">
            @include('character.skills')
        </div>
    </div>
@endsection

@section('content')

    <textarea id="diary">
SOME FANCY TEXT!
    </textarea>


@endsection