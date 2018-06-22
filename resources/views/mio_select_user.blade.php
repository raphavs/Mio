@extends('layouts.mio_home_app')

@section('content')
<div class="container-fluid">
    <div class="my-users-position">
        <h1 class="my-doors-header">{{ $door }}</h1>
        <div class="my-user-center offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-2 col-sm-8">
            <ul class="navbar-nav my-user-links">
                @if ($users->count() < 1)
                    <p class="col-12 my-no-rows-found-font">$$$ NO USERS FOUND $$$</p>
                @endif
                @foreach($users as $v)
                    <li class="nav-item">
                        <a class="nav-link" href="/home/{{ $door }}/selectuser/{{ $v->user->name }}">{{ $v->user->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection