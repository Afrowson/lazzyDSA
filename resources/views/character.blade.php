@extends('base')

@section('title')
    {{($character->name)}}
@endsection

@section('header')
    <div class="header-wrapper clearfix">
        <div class="header clearfix">
            <div class="pull-right header-skillbox">
                @include('includes.abillitys')

            </div>
            <h1>{{($character->name)}}
                <small>{{$character->ap_total}} AP</small>

            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container clearfix">
        <div class="pull-left character-base-block">
            <div class="clearfix ">
                <p class="pull-left character-base-name">Name</p>
                <p class="pull-right character-base-value">{{$character->name}}</p>
            </div>
            <div class="clearfix">
                <p class="pull-left character-base-name">Race</p>
                <p class="pull-right character-base-value">{{$character->race}}</p>
            </div>
            <div class="clearfix">
                <p class="pull-left character-base-name">Profession</p>
                <p class="pull-right character-base-value">{{$character->profession}}</p>
            </div>

        </div>
        <div class="pull-left character-base-block">
            <div class="clearfix">
                <p class="pull-left character-base-name">Alter</p>
                <p class="pull-right character-base-value">{{$character->age}}</p>
            </div>
            <div class="clearfix">
                <p class="pull-left character-base-name">Höhe</p>
                <p class="pull-right character-base-value">{{$character->height}}</p>
            </div>
            <div class="clearfix">
                <p class="pull-left character-base-name">Gewicht</p>
                <p class="pull-right character-base-value">{{$character->weight}}</p>
            </div>

        </div>

    </div>

@endsection