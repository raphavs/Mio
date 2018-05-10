@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<form action="/home/{{ $door }}/transactions">
    <div class="put-them-in-bg offset-lg-3 col-lg-6 offset-md-2 col-md-8">
        <div class="row my-transaction-margin">
            <div class="padding-search-input col-lg-7 col-md-7">
                <input id="user-id" type="search" class="my-input form-control" name="username" placeholder="Username ...">
            </div>
            <div class="padding-search-input col-lg-4 col-md-4">
                <input id="date-id" type="date" class="my-input form-control" name="date" placeholder="dd/mm/yyyy">
            </div>
            <div class="padding-search-input col-lg-1 col-md-1">
                <button type="submit" class="btn btn-logging">search</button>
            </div>
        </div>
    </div>
</form>
<div class="container-fluid last-block-margin-home">
    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 row">
        <table class="table my-table-fixed">
            <thead class="my-table-header">
                <tr>
                    <th class="col-2">ID</th>
                    <th class="col-4">Username</th>
                    <th class="col-3">Date</th>
                    <th class="col-3">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $v)
                <tr>
                    <td class="col-2">{{ $v->id }}</td>
                    <td class="col-4">{{ $v->client_name }}</td>
                    <td class="col-3">{{ $v->entrance_date }}</td>
                    <td class="col-3">{{ $v->entrance_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection