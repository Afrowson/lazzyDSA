@extends('base')

@section('title')
    {{($character->name)}}
@endsection

@section('header')
    <div class="header-wrapper clearfix">
        <div class=" pull-left header-name-wrapper">
            @include('includes.name')
        </div>

        <div class=" pull-left header-energy-wrapper">
            @include('includes.energy')
        </div>

        <div class="pull-right header-skillbox-wrapper">
            @include('includes.skills')
        </div>

    </div>
@endsection

@section('content')
    <div class="pull-right character-right-side clearfix">
        <div class="clearfix">
            <div class=" character-weapons-wrapper">
                @include('includes.weapons')
            </div>

            <div class="clearfix">
                <div class="pull-right character-bio-wrapper">
                    @include('includes.bio')
                </div>

                <div class="pull-right character-calculateables-wrapper">
                    @include('includes.calculateables')
                </div>

            </div>

            <div class="clearfix pull-right">

                <div class="pull-right character-fightingtalents-wrapper">
                    @include('includes.fightingtalents')

                    <div class="pull-right character-language-wrapper">
                        @include('includes.languages')
                    </div>
                </div>

                <div class="pull-right">
                    <div class="clearfix pull-left">
                        <div class="pull-right character-benefices-wrapper">
                            @include('includes.benefices')
                        </div>
                        <div>
                            <div class="pull-right character-specialtalents-wrapper">
                                @include('includes.specialtalents')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pull-left character-talents-wrapper">
        @include('includes.talents',[$t='0', $e='2'])
    </div>

    <div class="pull-left character-talents-wrapper">
        @include('includes.talents',[$t='3', $e='4'])

    </div>
    <div class="pull-left character-inventries-wrapper">
        @include('includes.inventory')
    </div>
@endsection
