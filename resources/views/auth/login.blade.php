@extends('base')

@section('nav-center')
    <div class="title primary">Login</div>

@endsection
@section('body')
    <div class="columns m-t-30">
        <div class="column is-one-quarter is-offset-4">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
    
                <div class=" field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="label">E-Mail Address</label>
        
                    <div class="control">
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}"
                            required autofocus>
            
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                <div class=" field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="label">Password</label>
        
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
                    <div class="control">
                        <div class="checkbox">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                            </label>
                        </div>
                    </div>
                </div>
    
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary is-link">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
@endsection
