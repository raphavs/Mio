@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<form action="/home/{{ $door }}/transactions">
    <div class="put-them-in-bg row offset-lg-3 col-lg-6 offset-md-2 col-md-8">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <input id="user-id" type="search" class="my-input form-control" name="username" placeholder="Username ...">
        </div>
        <div class="col-lg-5 col-md-4 col-sm-6">
            <input id="date-id" type="text" class="my-input form-control" name="date" placeholder="dd/mm/yyyy">
        </div>
        <div class="col-lg-1 col-md-2 col-sm-6">
            <button type="submit" class="btn btn-logging">search</button>
        </div>
    </div>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Transaction ID</th>
        <th scope="col">Username</th>
        <th scope="col">Time</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($transactions as $v)
        <tr>
            <th scope="row"> {{ $v->id }} </th>
            <td> {{ $v->client_name }} </td>
            <td> {{ $v->entrance_time }} </td>
            <td> {{ $v->entrance_date }} </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection