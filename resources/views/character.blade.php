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
            <div class="pull-right header-skillbox-wrapper">
                @include('includes.skills')

            </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="pull-right character-bio-wrapper">
        @include('includes.bio')
    </div>

    <div class="character-talents-wrapper">
        @include('includes.talents')
    </div>

    <div class="character-language-wrapper">
        @include('includes.languages')
    </div>

@endsection
