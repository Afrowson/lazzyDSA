@extends('app')

@section('title')
    {{ $character->name }}
@endsection

@section('nav')
    @include('nav')

@endsection

@section('content')
    @include('character.nav')

    <div class="grid xl:grid-cols-12 lg:grid-cols-10 md:grid-cols-8 grid-flow-row-dense">
        <div class="col-span-3 row-span-2">
            @include('character.fightingtalents')
        </div>
        <div class="col-span-4 row-span-1">
            @include('character.bio')
        </div>
        <div class="col-span-2 row-span-1">
            @include('character.calculateables')
        </div>
        <div class="col-span-2 row-span-1">
            @include('character.languages')
        </div>
        <div class="col-span-4">
            @include('character.specialtalents')
        </div>
        <div class="col-span-2 row-span-1">
            @include('character.letterings')
        </div>
        <div class="col-span-3
        @if(count($character->benefices) > 4) row-span-2 @endif">
            @include('character.benefices')
        </div>
        <div class="col-span-7">
            @include('character.weapons')
        </div>
        <div class="col-span-4">
            @include('character.handicaps')
        </div>
        <div class="col-span-2">
            @include('character.purse')
        </div>
        @php
            $spans = count($character->inventories)*4;
        @endphp
        <div class="col-span-{{$spans}}">
            @include('character.inventory')
        </div>
        @if(!is_null($character->magictricks->first()))
                <div class="col-span-6">@include('character.magictricks')</div>
        @endif
    </div>
    {{-- @include('character.talents',[$t='0', $e='4']) --}}
    {{-- @include('character.talents',[$t='3', $e='4']) --}}


@endsection
