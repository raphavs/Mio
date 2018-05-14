@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position last-block-margin-home">
    <h1 class="text-center">{{ $door }}</h1>
    <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 col-sm-10">
        <div class="row text-center my-links-font my-margin">
            <div class="padding-manage-links col-lg-6 col-md-6">
                <a class="nav-link" href="/home/{{ $door }}/selectuser">Manage Rights</a>
            </div>
            <div class="padding-manage-links col-lg-6 col-md-6">
                <a class="nav-link" href="/home/{{ $door }}/transactions">See Transactions</a>
            </div>
        </div>
    </div>
    <div class="offset-1 col-10 offset-lg-4 col-lg-4 offset-md-3 col-md-6 offset-sm-2 col-sm-8">
        <a class="my-btn btn-open" role="button" href="{{ route('mio.home') }}">Open</a>
    </div>
</div>
@endsection