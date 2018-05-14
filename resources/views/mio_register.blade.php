@extends('layouts.mio_logging_app')

@section('content')
<div class="card-body my-logging-position last-block-margin-logging">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-3 col-lg-4 my-col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-7 col-lg-5">
                <input id="name" type="text" class="my-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-3 col-lg-4 my-col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <div class="col-md-7 col-lg-5">
                <input id="email" type="email" class="my-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
            <label for="password-confirm" class="col-md-3 col-lg-4 my-col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            <div class="col-md-7 col-lg-5">
                <input id="password-confirm" type="password" class="my-input form-control" name="password_confirmation" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-7 offset-md-3 col-lg-5 offset-lg-4">
                <button type="submit" class="btn btn-logging">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection