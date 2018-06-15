@extends('layouts.mio_home_app')

@section('content')
<div class="my-doors-position">
    <ul class="navbar-nav my-doors-links">
        @foreach($doors as $v)
            <li class="nav-item">
                <a class="nav-link"
                   href="/home/{{ $v->door->door_name }}">{{ $v->door->door_name}}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection