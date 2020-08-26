@extends('base')

@section('content')
    <div class="bg-cover bg-top w-full min-h-screen" style="background-image: url(images/third-eye.jpg);">
        <div class="flex flex-col w-full h-full justify-center items-center p-8">
            <div class="w-full md:max-w-screen-sm rounded">
                <div class="px-4 py-10 bg-gray-100 bg-opacity-75 rounded-lg">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="control">
                                <input
                                    class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-4 focus:bg-green-200"
                                    id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                    placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="control">
                                <input id="email" type="email"
                                    class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-4 focus:bg-green-200"
                                    name="email" value="{{ old('email') }}" required placeholder="E-Mail Addresse">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password"
                                class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-4 focus:bg-green-200"
                                name="password" required placeholder="Passwort">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="field">
                            <input id="password-confirm" type="password"
                                class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-8 focus:bg-green-200"
                                name="password_confirmation" required placeholder="Passwort wiederholen">
                        </div>

                        <div class="field">
                            <button type="submit"
                                class="flex justify-center items-center w-full h-12 text-base bg-green-600 hover:opacity-75 sm:text-lg rounded">
                                Registrieren
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
