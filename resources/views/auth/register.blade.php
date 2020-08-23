@extends('base')

@section('content')
<div class="bg-cover bg-top w-full min-h-screen" style="background-image: url(images/third-eye.jpg);">
        <div class="column is-offset-4 is-one-quarter">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="label">E-Mail Address</label>

                    <div class="control">
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="label">Password</label>
                    <div class="control">
                        <input id="password" type="password" class="input" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary is-link">
                            Register
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
</div>
@endsection
