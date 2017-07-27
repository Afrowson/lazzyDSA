@extends('app')

@section('content')

    <div>

        <form action="/character/{{$character->id}}/addLanguage">








            <button class="button">Senden</button>
        </form>



    </div>


    @endsection