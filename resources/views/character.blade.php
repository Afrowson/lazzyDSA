@extends('base')

@section('title')
    {{($character->name)}}
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
    <div class="pull-right character-right-side ">
        <div>
            <div class=" character-weapons-wrapper">
                @include('character.weapons')
            </div>

            <div>
                <div class="pull-right character-bio-wrapper">
                    @include('character.bio')
                </div>

                <div class="pull-right character-calculateables-wrapper">
                    @include('character.calculateables')
                </div>

            </div>

            <div class="pull-right">

                <div class="pull-right character-fightingtalents-wrapper">
                    @include('character.fightingtalents')

                    <div class="pull-right character-language-wrapper">
                        @include('character.languages')
                    </div>
                </div>

                <div class="pull-right">
                    <div class="pull-left">
                        <div class="pull-right character-benefices-wrapper">
                            @include('character.benefices')
                        </div>
                        <div>
                            <div class="pull-right character-specialtalents-wrapper">
                                @include('character.specialtalents')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pull-left character-talents-wrapper">
        @include('character.talents',[$t='0', $e='2'])
    </div>

    <div class="pull-left character-talents-wrapper">
        @include('character.talents',[$t='3', $e='4'])

    </div>
    <div class="pull-left character-inventries-wrapper">
        @include('character.inventory')
    </div>
    <div class="pull-left character-magictrick-wrapper">
        @include('character.magictricks')
    </div>
@endsection
