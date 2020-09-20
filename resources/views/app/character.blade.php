@extends('app')

@section('title')
    {{ $character->name }}
@endsection

@section('nav')
    @include('nav')
@endsection

@section('content')
    @include('character.nav')

    <div class="grid xl:grid-cols-24 lg:grid-cols-20 md:grid-cols-16 sm:grid-cols-16 grid-flow-row-dense">
        <div class="col-span-7 row-span-2">
            @include('character.fightingtalents')
        </div>
        <div class="col-span-4 row-span-2 ">
            @include('character.bio')
        </div>
            @include('character.languages')


            @include('character.specialtalents')


        <div class="col-span-9 @if(count($character->benefices) > 4) row-span-2 @endif">
            @include('character.benefices')
        </div>

        <div class="col-span-10 @if(count($character->handicaps) > 4) row-span-2 @endif">
            @include('character.handicaps')
        </div>
        <div class="col-span-4 row-span-2">
            @include('character.purse')
        </div>
        <div class="col-span-16">
            @include('character.weapons')
        </div>
        @php
            $spans = count($character->inventories)*8;
        @endphp
        <div class="col-span-{{$spans}}">
            @include('character.inventory')
        </div>
        @if(!is_null($character->magictricks->first()))
                <div class="col-span-15">@include('character.magictricks')</div>
        @endif
    </div>
    {{-- @include('character.talents',[$t='0', $e='4']) --}}
    {{-- @include('character.talents',[$t='3', $e='4']) --}}


@endsection
