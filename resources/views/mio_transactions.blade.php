@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<form id="big-form" action="/home/{{ $door }}/transactions">
    <div class="my-transaction-margin offset-2 col-8">
        <div class="form-row">
            <div class="form-row my-additional-margin-for-userinput col-5">
                <label for="username" class="padding-search-label">Username:</label>
                <div class="my-username-width">
                    <input id="username" type="search" class="my-input-padding form-control" name="username" placeholder="Username ...">
                </div>
            </div>
            <div class="col-1"></div>
            <div class="form-row col-4">
                <label for="date" class="padding-search-label">Date:</label>
                <div class="my-date-width">
                    <input id="date" type="date" class="my-input-padding form-control" name="date">
                </div>
            </div>
            <div class="my-additional-margin-for-btn col-2">
                <div class="put-btn-right">
                    <button type="submit" class="btn btn-search">search</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="little-form" action="/home/{{ $door }}/transactions">
    <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
        <div class="form-row">
            <div class="form-row col-8">
                <label for="username" class="col-4 padding-search-label">Username:</label>
                <div class="col-8">
                    <div class="my-username-width">
                        <input id="username" type="search" class="my-input-padding form-control" name="username" placeholder="Username ...">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-row col-8">
                <label for="date" class="col-4 padding-search-label">Date:</label>
                <div class="col-8">
                    <div class="my-date-width">
                        <input id="date" type="date" class="my-input-padding form-control" name="date">
                    </div>
                </div>
            </div>
            <div class="my-additional-margin-for-btn col-lg-4 col-md-4 col-sm-4 col-4">
                <div class="put-btn-right">
                    <button type="submit" class="btn btn-search">search</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="very-little-form" action="/home/{{ $door }}/transactions">
    <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
        <div class="form-row">
            <label for="username" class="col-4 padding-search-label">Username:</label>
            <div class="col-8">
                <div class="my-username-width">
                    <input id="username" type="search" class="my-input-padding form-control" name="username" placeholder="Username ...">
                </div>
            </div>
        </div>
        <div class="form-row">
            <label for="date" class="col-4 padding-search-label">Date:</label>
            <div class="col-8">
                <div class="my-date-width">
                    <input id="date" type="date" class="my-input-padding form-control" name="date">
                </div>
            </div>
        </div>
        <div class="my-additional-margin-for-btn form-row">
            <button type="submit" class="btn btn-search">search</button>
        </div>
    </div>
</form>
<div class="container-fluid last-block-margin-home">
    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
        <div class="row">
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
</div>
@endsection