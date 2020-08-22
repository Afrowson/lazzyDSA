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

@section('nav')
    @include('character.name')

    @include('character.energy')

    @include('character.skills')
@endsection

@section('content')
    
    <div class=" is-pulled-left">
     <textarea id="diary">
SOME FANCY TEXT!
    </textarea>
    </div>



@endsection