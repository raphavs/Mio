@extends('layouts.mio_home_app')

@section('content')
<div class="my-doors-center">
    <ul class="navbar-nav my-list-font">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">Home Sunthausen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">Home Constance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">FH Constance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">Apartment Bruder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">Home Donaueschingen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home_managedoor') }}">Apartment Gianmarco</a>
        </li>
    </ul>
</div>
@endsection