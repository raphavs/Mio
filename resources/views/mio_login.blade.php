@extends('layouts.mio_logging_app')

@section('content')
<div class="card-body my-logging-position last-block-margin-logging">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-3 col-lg-4 my-col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <div class="col-md-7 col-lg-5">
                <input id="email" type="email" class="my-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-3 col-lg-4 my-col-form-label text-md-right">{{ __('Password') }}</label>
            <div class="col-md-7 col-lg-5">
                <input id="password" type="password" class="my-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-7 offset-md-3 col-lg-5 offset-lg-4">
                <div class="checkbox">
                    <label class="remember-me-label">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row col-md-7 offset-md-3 col-lg-5 offset-lg-4 mb-0">
            <div class="logging-button-padding">
                <button type="submit" class="btn btn-logging">
                    {{ __('Login') }}
                </button>
            </div>
            <div id="logging-textlink-padding">
                <a class="btn my-btn-link" href="{{ route('login.resetpw') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
            <div class="logging-button-padding">
                <a class="btn btn-logging" role="button" href="{{ route('register') }}">Create Account</a>
            </div>
        </div>
    </form>
</div>
@endsection