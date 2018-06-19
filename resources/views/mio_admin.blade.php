@extends('layouts.mio_home_app')

@section('content')
<div class="my-admin-content-center">
    <h2 class="my-admin-header">Admins</h2>
    <div class="my-table-margin offset-lg-1 col-lg-10">
        <table class="table table-hover table-dark my-admin-table-fixed">
            <thead>
            <tr class="d-flex">
                <th class="col-md-2 col-1">ID</th>
                <th class="col-md-3 col-3">Name</th>
                <th class="col-md-5 col-5">Mail</th>
                <th class="col-md-2 col-3">Edit Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $a)
                <tr class="d-flex">
                    <td scope="row" class="col-md-2 col-1">{{ $a->id }}</td>
                    <td class="col-md-3 col-3">{{ $a->name }}</td>
                    <td class="col-md-5 col-5">{{ $a->email }}</td>
                    <td class="col-md-2 col-3"><a href="/admin/{{ $a->name }}"><button class="btn btn-manage">Manage</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <h2 class="my-admin-header">Clients</h2>
    <div class="my-table-margin offset-lg-1 col-lg-10">
        <table class="table table-hover table-dark my-admin-table-fixed">
            <thead>
            <tr class="d-flex">
                <th class="col-md-2 col-1">ID</th>
                <th class="col-md-3 col-3">Name</th>
                <th class="col-md-5 col-5">Mail</th>
                <th class="col-md-2 col-3">Edit Client</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $c)
                <tr class="d-flex">
                    <td scope="row" class="col-md-2 col-1">{{ $c->id }}</td>
                    <td class="col-md-3 col-3">{{ $c->name }}</td>
                    <td class="col-md-5 col-5">{{ $c->email }}</td>
                    <td class="col-md-2 col-3"><a href="/admin/{{ $c->name }}"><button class="btn btn-manage">Manage</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <h2 class="my-admin-header">Users</h2>
    <div class="my-table-margin offset-lg-1 col-lg-10">
        <table class="table table-hover table-dark my-admin-table-fixed">
            <thead>
            <tr class="d-flex">
                <th class="col-md-2 col-1">ID</th>
                <th class="col-md-3 col-3">Name</th>
                <th class="col-md-5 col-5">Mail</th>
                <th class="col-md-2 col-3">Delete User</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <form id="formUser{{ $u->id }}" action="/admin" method="post"></form>
                <input form="formUser{{ $u->id }}" type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr class="d-flex">
                    <td scope="row" class="col-md-2 col-1">{{ $u->id }}</td>
                    <td class="col-md-3 col-3">{{ $u->name }}</td>
                    <td class="col-md-5 col-5">{{ $u->email }}</td>
                    <td class="col-md-2 col-3"><input form="formUser{{ $u->id }}" type="submit" value="Delete" class="btn btn-delete"></td>
                    <input form="formUser{{ $u->id }}" type="hidden" name="id" value="{{ $u->id }}">
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection