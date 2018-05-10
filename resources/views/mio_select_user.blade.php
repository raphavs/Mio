@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div class="my-user-center my-user-links offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-2 col-sm-8 last-block-margin-home">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Bruder' }}">Bruder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Gianmarco' }}">Gianmarco</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Pheline' }}">Pheline</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Dad' }}">Dad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Mom' }}">Mom</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Robin' }}">Robin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ 'Ebrar' }}">Ebrar</a>
        </li>
    </ul>
</div>
@endsection