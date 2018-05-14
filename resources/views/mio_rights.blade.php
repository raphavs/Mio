@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div class="my-user-door-margin">
    <h2 class="text-center font-weight-bold">{{ $user }}:</h2>
</div>
<form action="/home/{{ $door }}/selectuser/{{ $user }}/ext" class="col-12 last-block-margin-home">
    <div class="my-rights-bg offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-2 col-sm-8">
        <div class="row my-rights-box">
            <h4 class="my-rights-innerbox text-center col-lg-7 col-md-7">Access Right:</h4>
            <div class="my-rights-innerbox my-toggles-in-center col-lg-3 col-md-3">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off">ON
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">OFF
                    </label>
                </div>
            </div>
        </div>
        <div class="row my-last-right-box">
            <h4 class="my-rights-innerbox text-center col-lg-7 col-md-7">Protocol Right:</h4>
            <div class="my-rights-innerbox my-toggles-in-center col-lg-3 col-md-3">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off">ON
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">OFF
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-margin-for-save">
        <button type="submit" class="btn btn-search save">save changes</button>
    </div>
</form>
@endsection