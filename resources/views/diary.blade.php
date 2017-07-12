@extends('app')

@section('head')
    <script src='/js/tinymce/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#diary',
            theme: 'modern',
            width: 1300,
            height: 650
        });
    </script>
@endsection


@section('title')
    {{$character->name}}'s Tagebuch
@endsection

@section('nav-left')
            @include('character.name')
@endsection
@section('nav-center')
            @include('character.energy')
@endsection
@section('nav-right')
            @include('character.skills')
@endsection

@section('sidebar')
    <h1>SOME TEXT</h1>
    <h1> SOME Other Text</h1>

@endsection
@section('content')

    <div class=" is-pulled-left">
     <textarea id="diary">
SOME FANCY TEXT!
    </textarea>
    </div>



@endsection