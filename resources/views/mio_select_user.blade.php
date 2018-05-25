@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div class="my-user-center my-user-links offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-2 col-sm-8 last-block-margin-home">
    <ul class="navbar-nav">
        @foreach($my_users as $v)
            <li class="nav-item">
                <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ $v->user_name }}">{{ $v->user_name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection