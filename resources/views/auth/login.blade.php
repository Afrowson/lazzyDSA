@extends('base')

@section('content')
    <div class="bg-cover bg-top w-full min-h-screen" style="background-image: url(images/third-eye.jpg);">
        <div class="flex flex-col w-full h-full justify-center items-center p-8">
            <div class="w-full md:max-w-screen-sm border-gray-200">

                <div class="px-4 pt-10 bg-gray-100 bg-opacity-75 rounded-lg">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="control">
                                <input id="email" type="email"
                                    class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-4 focus:bg-green-200"
                                    name="email" value="{{ old('email') }}" required autofocus
                                    placeholder="E-Mail Addresse">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class=" {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label"></label>

                            <div class="">
                                <input id="password" type="password"
                                    class="w-full h-12 appearance-none focus:outline-none rounded-md text-base sm:text-lg placeholder-gray-600 border border-gray-900 pl-4 mb-8 focus:bg-green-200"
                                    name="password" required placeholder="Passwort">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="flex flex-row justify-center text-gray-200 text-base w-full">
                            <label class="checkbox text-gray-800">
                                <input type="checkbox" name="remember" class="mb-6 mr-2" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                            </label>
                        </div>

                        <div class="">
                            <button type="submit"
                                class="flex justify-center items-center w-full h-12 text-base bg-green-600 hover:opacity-75 sm:text-lg rounded">
                                Eintreten
                            </button>
                        </div>
                    </form>
                    <div class="flex justify-around items-center mt-3">
                        <a href="{{ route('password.request') }}" class="h-12 hover:underline">Passwort vergessen?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
