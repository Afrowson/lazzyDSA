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
            <div class="pull-right header-skillbox">
                @include('includes.abillitys')

            </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="character-bio-wrapper">
        @include('includes.bio')
    </div>

@endsection
