@extends('base')

@section('title')
    {{($character->name)}}
@endsection

@section('header')
    <div class="container">
        <h1>{{($character->name)}}<small>{{$character->ap_total}} AP</small></h1>

        @include('includes.abillitys')
    </div>

@section('content')
    <div class="container">


    </div>
@endsection