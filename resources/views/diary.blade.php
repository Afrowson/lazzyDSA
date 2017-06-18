@extends('base')

@section('head')
    <script src='/js/tinymce/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#diary',
            theme: 'modern',
            width: 'auto',
            height: 300,
        });
    </script>
@endsection


@section('title')
    {{$character->name}}'s Tagebuch
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

    <div class="pull-left sidebar">
        <h1>SOME TEXT</h1>
        <h1> SOME Other Text</h1>
    </div>

    <div class="pull-left">
     <textarea id="diary">
SOME FANCY TEXT!
    </textarea>
    </div>



@endsection