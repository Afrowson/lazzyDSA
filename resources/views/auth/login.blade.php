@extends('base')

@section('nav-center')
    <div class="text-black text-base sm:text-lg md:text-xl lg:text-2xl text-center italic uppercase">Das <b>schwarze</b> Auge</div>
@endsection

@section('body')
    <div class="bg-cover bg-top w-full h-full" style="background-image: url(images/third-eye.jpg);">
        <div class="flex flex-col w-full h-full justify-center items-center p-8">
            <div class="w-full md:max-w-screen-sm">
            <form class="px-4 py-10 bg-gray-100 bg-opacity-75" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
    
                <div class="{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="control">
                        <input id="email" type="email" class="w-full h-12 text-base sm:text-lg placeholder-black border border-gray-900 pl-4 mb-4 focus:bg-green-200" name="email" value="{{ old('email') }}"
                            required autofocus placeholder="E-Mail Addresse">
            
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
                        <input id="password" type="password" class="w-full h-12 text-base sm:text-lg placeholder-black border border-gray-900 pl-4 mb-8 focus:bg-green-200" name="password" required placeholder="Passwort">
            
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>

                 <div class="flex flex-row justify-center text-gray-200 text-base {{-- sm:text-lg --}} w-full">
                    <label class="checkbox text-gray-800">
                        <input type="checkbox" name="remember" class="mb-6" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                    </label>
                </div>
    
           {{--  <div class="flex justify-center w-full h-16 sm:text-xl bg-green-200 rounded hover:opacity-75"> --}}
                <div class="{{-- control --}}">
                    <button type="submit" class="flex justify-center items-center w-full h-12 text-base bg-green-600 hover:opacity-75 sm:text-lg ">
                        Eintreten
                    </button>
                </div>
                </form>
                <a href="{{ route('password.request') }}" class="flex justify-center items-center w-full h-12 text-base hover:underline">Passwort vergessen?</a>

                <a href="" class="flex justify-center items-center w-full h-12 text-base hover:underline">Registrieren</a>

            </div>
        </div>
    </div>
@endsection
