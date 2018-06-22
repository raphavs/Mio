@extends('layouts.mio_home_app')

@section('content')
<div class="container-fluid">
    <div class="my-adduser-content-center">
        <h1 class="my-doors-header">{{ $door }}</h1>
        <div class="card-body my-add-user-margin">
            <form id="add-new-user" action="/home/{{ $door }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 my-col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 my-col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 my-col-form-label text-md-right">{{ __('Password') }}</label>
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
                    <label for="password-confirm" class="col-md-4 my-col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-add">{{ __('Add User') }}</button>
                    </div>
                </div>
                <div class="my-margin-change-blade-btn text-center">
                    <button class="btn btn-change" onclick="showExisting()">{{ __('Add existing User') }}</button>
                </div>
            </form>
            <form id="add-existing-user" action="/home/{{ $door }}" method="post">
                @csrf
                <div id="not-error" class="my-error-margin-half">
                    <p class="my-error-font">User does not exist!</p>
                </div>
                <div id="div-existing-email" class="form-group row">
                    <label for="email" class="col-md-4 col-lg-4 my-col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="existing-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div id="wrong-error" class="my-error-margin-half">
                    <p class="my-error-font">Wrong password!</p>
                </div>
                <div id="div-existing-password" class="form-group row">
                    <label for="password" class="col-md-4 col-lg-4 my-col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-md-6 col-lg-5">
                        <input id="existing-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="add-margin-btn-sm row col-md-6 offset-md-4 col-lg-5 offset-lg-4">
                        <div class="logging-button-padding">
                            <button id="add-btn" type="submit" class="btn btn-add">{{ __('Add User') }}</button>
                        </div>
                    </div>
                </div>
                <div id="already-error" class="adduser-error-margin">
                    <p class="my-error-font">User is already User of this door!</p>
                </div>
                <div class="my-margin-change-blade-btn text-center">
                    <button class="btn btn-change" onclick="showNew()">{{ __('Add new User') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if ($error == 'user-not-exists')
    <script type="text/javascript" src="/js/mioUserNotExists.js"></script>
@elseif ($error == 'wrong-password')
    <script type="text/javascript" src="/js/mioUserWrongPassword.js"></script>
@elseif ($error == 'user-already-exists')
    <script type="text/javascript" src="/js/mioUserAlreadyExists.js"></script>
@elseif ($error == 'okay')
    <script type="text/javascript" src="/js/mioAddUser.js"></script>
@endif
@endsection