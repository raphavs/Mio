@extends('layouts.mio_logging_app')

@section('content')
<div class="card-body my-logging-content-center">
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
                        <input type="checkbox" name="remember" class="my-logging-checkbox" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row col-md-5 offset-md-4 col-lg-5 offset-lg-4">
            <div class="logging-button-padding">
                <button type="submit" class="btn btn-logging">Sign in</button>
            </div>
            <div id="logging-textlink-padding">
                <a class="btn my-btn-link" href="{{ route('login.resetpw') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
            <div class="logging-button-padding">
                <a class="btn btn-logging" role="button" href="{{ route('register') }}">Create Account</a>
            </div>
        </div>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    var size = [window.width, window.height];

    $(window).resize(function()
    {
        alert("KUKU BRA");
        window.resizeTo(size[0], size[1]);
        window.focus();
    });
</script>
@endsection