{{--  to do:
improve design button, create uniform design for buttons
component: hamburger nav for button logout, datenbank etc. 
improve design Helden cards, maybe some pics
a logo which shows a Schwarzes Auge?
 --}}

@extends('app')

@section('title')
    Charaktere
@endsection

@section('nav')
    <div class="position:fixed">
        <h1 class="text-lg">Deine Helden</h1>
    </div>

    @if (Auth::guest())
        <a class="button is-danger" href="{{ route('login') }}">Login</a>
        <a class="button is-warning" href="{{ route('register') }}">Register</a>
    @else
        <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
             <button class="button" type="submit" href="{{ route('logout') }}">Logout</button>
        </form> -->
    @endif
@endsection

@section('content')
    <div class="flex flex-col justify-between w-full items-center pt-20 md:pt-32 pb-4 px-3">
        @foreach($characters as $character)
            <div href="character/{{$character->id}}" class="flex flex-col items-center bg-gray-200 pt-4 mx-2 mb-4 w-full sm:max-w-screen-sm rounded">
                <h3 class="text-lg font-bold">{{$character->name}}, {{$character->ap_total}} AP</h3>
                <p class="text-base pb-4">{{$character->race}}, {{$character->profession}}</p>
                <div class="flex w-full text-center">
                    <a href="/character/{{$character->id}}/show" class="py-2 bg-teal-500 hover:bg-teal-400 bg-opacity-75 w-2/4 rounded-bl">Ansehen</a>
                    <a href="/character/{{$character->id}}/edit" class="py-2 bg-teal-700 hover:bg-teal-500 w-2/4 rounded-br">Bearbeiten</a>
                </div>
            </div>
        @endforeach
        <a href="/character/create" class="w-full sm:max-w-xs px-2 py-6 mx-2 mt-6 text-center bg-green-200 hover:bg-green-500 opacity-75 rounded">
            Neuer Held
        </a>
    </div>

@endsection

@section('nav-left')
    <a href="/index" class="button">Deine Helden</a>
    <a href="/database" class="button">Datenbank</a>
@endsection