@extends('layouts.mio_home_app')

@section('content')
<div class="container-fluid">
    <div class="row my-position-btns-home">
        <div class="col-12 col-md-6 my-position-btn-door-home">
            <button id="btn-add-door" class="btn btn-change" @if (!\Illuminate\Support\Facades\Auth::user()->hasRole('client')
        and !\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) disabled @endif>Add Door</button>
        </div>
        <form id="div-manage-clients" class="col-12 col-md-6 my-position-btn-admin-home" action="/admin">
            <button class="btn btn-change" type="submit" @if (!\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) disabled @endif>Manage Clients</button>
        </form>
        <div class="col-12 text-center">
            <button id="btn-close-add-door" class="btn btn-change">Close Form</button>
        </div>
    </div>
    <div id="div-add-door-form" class="my-add-door-card-body my-add-door-position">
        <form action="/home" method="post">
            @csrf
            <div id="door-already-exists-error" class="my-error-margin-half">
                <p class="my-error-font">Doorname already exists!</p>
            </div>
            <div id="input-field-doorname" class="form-group row">
                <label for="new-door-id" class="col-md-5 my-col-form-label text-md-right">{{ __('Doorname:') }}</label>
                <div class="col-md-4 col-lg-3">
                    <input type="text" class="form-control" id="new-door-id" name="doorname" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="device" class="col-md-5 my-col-form-label text-md-right">{{ __('Device:') }}</label>
                <div class="col-md-4 col-lg-3">
                    <input type="number" class="form-control" id="device" placeholder="ID of your Device..." disabled>
                </div>
            </div>
            <div class="form-group row">
                <div class="add-margin-btn-sm row col-md-4 offset-md-5 col-lg-5 offset-lg-5">
                    <div class="logging-button-padding">
                        <button type="submit" class="btn btn-add">{{ __('Add Door') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="div-doors" class="my-doors-position">
        <ul class="navbar-nav my-doors-links">
            @if ($doors->count() < 1)
                <p class="col-12 my-no-rows-found-font">$$$ NO DOORS FOUND $$$</p>
            @endif
            @foreach($doors as $v)
                <li class="nav-item">
                    <a class="nav-link"
                       href="/home/{{ $v->door->door_name }}">{{ $v->door->door_name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@if ($error == 'door-already-exists')
    <script type="text/javascript" src="/js/mioDoorAlreadyExists.js"></script>
@elseif ($error == 'okay')
    <script type="text/javascript" src="/js/mioAddDoor.js"></script>
@endif
@endsection