@extends('layouts.mio_home_app')

@section('content')
<div class="my-doors-center my-doors-links">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'Home Sunthausen' }}">Home Sunthausen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'Home Constance' }}">Home Constance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'FH Constance' }}">FH Constance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'Apartment Bruder' }}">Apartment Bruder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'Home Donaueschingen' }}">Home Donaueschingen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ 'Apartment Gianmarco' }}">Apartment Gianmarco</a>
        </li>
    </ul>
</div>
@endsection