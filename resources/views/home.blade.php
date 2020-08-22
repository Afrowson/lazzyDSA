@extends('base')


@section('nav')
    <div class="flex justify-between items-center bg-green-200  h-12 sm:h-12 md:h-16 lg:h-16 m-0">
        <div>
            @if (!Auth::guest())

                <a href="/index" class="button">Deine Helden</a>

                <a href="/database" class="button">Datenbank</a>
            @else
                <p> Please log in :)</p>
            @endif
        </div>

        <div>
            <p class="text-black text-base sm:text-lg md:text-xl lg:text-2xl text-center px-3"> Lazzy DSA</p>
            @if (!Auth::guest())
                <p class="primary">Hallo {{ Auth::user()->name }}</p>
            @endif
        </div>

        <div class="">
            @if (Auth::guest())
                <a class="bg-teal-800 p-2 mx-2 text-black rounded" href="{{ route('login') }}">Login</a>
                <a class="bg-teal-800 p-2 mx-2 text-black rounded" href="{{ route('register') }}">Register</a>
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="button" type="submit" href="{{ route('logout') }}">Logout</button>
                </form>
            @endif
        </div>
    </div>
@endsection

@section('content')

@endsection
