@extends('layouts.mio_home_app')

@section('content')
<div class="my-doors-center my-doors-links">
    <ul class="my-list">
        @foreach($doors as $v)
            <li class="nav-item">
                <a class="nav-link"
                   href="/home/{{ $v->door_name }}">{{ $v->door_name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection