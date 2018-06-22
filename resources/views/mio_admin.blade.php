@extends('layouts.mio_home_app')

@section('content')
<div class="container-fluid">
    <div class="my-admin-content-center">
        <h2 class="my-admin-header">Admins</h2>
        <div class="my-table-margin offset-lg-1 col-lg-10 table-responsive">
            <table class="table table-hover table-dark my-admin-table-fixed">
                <thead>
                <tr class="d-flex">
                    <th class="col-md-2 col-2">ID</th>
                    <th class="col-md-3 d-none d-md-block">Name</th>
                    <th class="col-md-5 col-7">Mail</th>
                    <th class="col-md-2 col-3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($admins as $a)
                    <tr class="d-flex">
                        <td scope="row" class="col-md-2 col-2">{{ $a->id }}</td>
                        <td class="col-md-3 d-none d-md-block">{{ $a->name }}</td>
                        <td class="col-md-5 col-7">{{ $a->email }}</td>
                        <td class="col-md-2 col-3"><a href="/admin/{{ $a->name }}"><button class="btn btn-manage">Manage</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <h2 class="my-admin-header">Clients</h2>
        <div class="my-table-margin offset-lg-1 col-lg-10 table-responsive">
            <table class="table table-hover table-dark my-admin-table-fixed">
                <thead>
                <tr class="d-flex">
                    <th class="col-md-2 col-2">ID</th>
                    <th class="col-md-3 d-none d-md-block">Name</th>
                    <th class="col-md-5 col-7">Mail</th>
                    <th class="col-md-2 col-3"></th>
                </tr>
                </thead>
                <tbody>
                @if ($clients->count() < 1)
                    <p class="col-12 my-no-rows-found-font">$$$ NO CLIENTS FOUND $$$</p>
                @endif
                @foreach($clients as $c)
                    <tr class="d-flex">
                        <td scope="row" class="col-md-2 col-2">{{ $c->id }}</td>
                        <td class="col-md-3 d-none d-md-block">{{ $c->name }}</td>
                        <td class="col-md-5 col-7">{{ $c->email }}</td>
                        <td class="col-md-2 col-3"><a href="/admin/{{ $c->name }}"><button class="btn btn-manage">Manage</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <h2 class="my-admin-header">Users</h2>
        <div class="my-table-margin offset-lg-1 col-lg-10 table-responsive">
            <table class="table table-hover table-dark my-admin-table-fixed">
                <thead>
                <tr class="d-flex">
                    <th class="col-md-2 col-2">ID</th>
                    <th class="col-md-3 d-none d-md-block">Name</th>
                    <th class="col-md-5 col-7">Mail</th>
                    <th class="col-md-2 col-3"></th>
                </tr>
                </thead>
                <tbody>
                @if ($users->count() < 1)
                    <p class="col-12 my-no-rows-found-font">$$$ NO USERS FOUND $$$</p>
                @endif
                @foreach($users as $u)
                    <form id="formUser{{ $u->id }}" action="/admin" method="post"></form>
                    <input form="formUser{{ $u->id }}" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <tr class="d-flex">
                        <td scope="row" class="col-md-2 col-2">{{ $u->id }}</td>
                        <td class="col-md-3 d-none d-md-block">{{ $u->name }}</td>
                        <td class="col-md-5 col-7">{{ $u->email }}</td>
                        <td class="col-md-2 col-3"><input form="formUser{{ $u->id }}" type="submit" value="Delete" class="btn btn-delete"></td>
                        <input form="formUser{{ $u->id }}" type="hidden" name="id" value="{{ $u->id }}">
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection