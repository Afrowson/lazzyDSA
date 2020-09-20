@extends('app')

@section('title')
    {{ $character->name }}
@endsection

@section('nav')
    @include('nav')
@endsection

@section('content')
    @include('character.nav')

    <div class="grid xl:grid-cols-24 lg:grid-cols-20 md:grid-cols-16 sm:grid-col-14 grid-flow-row-dense">
        <div class="col-span-7 row-span-2 m-2">
            @include('character.fightingtalents')X
        </div>

            @include('character.bio')
            @include('character.languages')
            @include('character.specialtalents')
            @include('character.benefices')
            @include('character.handicaps')

        <div class="col-span-4 row-span-1">
            @include('character.purse')
        </div>
        <div class="col-span-16 lg:col-span-14 xl:col-span-14">
            @include('character.weapons')
        </div>
        @php
            $spans = count($character->inventories)*8;
        @endphp
{{--        <div class="col-span-{{$spans}}">--}}
{{--            @include('character.inventory')--}}
{{--        </div>--}}
        @if(!is_null($character->magictricks->first()))
                <div class="col-span-15">@include('character.magictricks')</div>
        @endif
    </div>
    {{-- @include('character.talents',[$t='0', $e='4']) --}}
    {{-- @include('character.talents',[$t='3', $e='4']) --}}


@endsection
