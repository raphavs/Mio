@extends('layouts.mio_logging_app')

@section('content')
<div class="container-fluid">
    <div class="my-logging-content-center">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-lg-4 my-col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-lg-4 my-col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4 col-lg-5 offset-lg-4">
                        <div class="checkbox">
                            <label class="remember-me-label">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="add-margin-btn-sm row col-md-6 offset-md-4 col-lg-5 offset-lg-4">
                        <div class="logging-button-padding">
                            <button type="submit" class="btn btn-logging">Sign in</button>
                        </div>
                        <a class="btn my-btn-link disabled" href="{{ route('login.resetpassword') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        <div class="logging-button-padding">
                            <a class="btn btn-logging" role="button" href="{{ route('register') }}">Create Account</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection