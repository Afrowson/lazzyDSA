@extends('base')

@section('title')
    {{($character->name)}}
@endsection

@section('header')
    <div class="header-wrapper clearfix">
        <div class="header clearfix">
            <h1 class="pull-left">{{($character->name)}}
                <small>{{$character->ap_total}} AP</small>
            </h1>

            <div class=" pull-left header-energy-wrapper">
                @include('includes.energy')
            </div>

            <div class="pull-right header-skillbox-wrapper">
                @include('includes.skills')

            </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="pull-right character-right-side clearfix">
        <div class="pull-right character-bio-wrapper">
            @include('includes.bio')
        </div>
        <p></p>
        <div class="pull-right character-calculateables-wrapper">
            @include('includes.calculateables')
        </div>
        <div class="pull-right character-language-wrapper">
            @include('includes.languages')
        </div>
        <div class="pull-right character-fightingtalents-wrapper">
            @include('includes.fightingtalents')
        </div>
    </div>
    <div class="pull-left character-talents-wrapper">
        @include('includes.talents',[$t='0', $e='2'])
    </div>
    <div class="pull-left character-talents-wrapper">
        @include('includes.talents',[$t='3', $e='4'])
    </div>

@endsection
