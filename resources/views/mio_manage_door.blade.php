@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position col-12">
    <h1 class="display-5 text-center">Home Constance</h1>
    <div class="row">
        <div>
            <a class="nav-link" href="{{ route('home_managedoor') }}">Manage Rights</a>
        </div>
        <div>
            <a class="nav-link" href="{{ route('home_managedoor') }}">See Transactions</a>
        </div>
    </div>
    <div class="row">
        <p>3</p>
    </div>
    <div class="row">
        <p>4</p>
    </div>
    <div class="row">
        <p>5</p>
    </div>
    <div class="row">
        <p>6</p>
    </div>
    <h1>Hallo</h1>
</div>
@endsection