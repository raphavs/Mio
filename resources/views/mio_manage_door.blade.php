@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="my-doors-header">{{ $door }}</h1>
    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 offset-sm-1 col-sm-10">
        <div class="row text-center my-links-font my-margin-for-links-managedoor">
            @if ($role_id == 2)
                <div class="padding-manage-links col-lg-6 col-md-6">
                    <a class="nav-link" href="/home/{{ $door }}/selectuser">Manage Rights</a>
                </div>
                <div class="padding-manage-links col-lg-6 col-md-6">
                    <a class="nav-link" href="/home/{{ $door }}/transactions">See Transactions</a>
                </div>
            @elseif ($role_id == 3)
                <div class="padding-manage-links col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                    <a class="nav-link" href="/home/{{ $door }}/transactions">See Transactions</a>
                </div>
            @endif
        </div>
    </div>
    <div class="offset-1 col-10 offset-lg-4 col-lg-4 offset-md-3 col-md-6 offset-sm-2 col-sm-8">
        <a class="my-btn-open btn-open" role="button" href="{{ route('mio.home') }}">Open</a>
    </div>
</div>
@endsection