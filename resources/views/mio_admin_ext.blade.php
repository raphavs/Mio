@extends('layouts.mio_home_app')

@section('content')
    <div class="container-fluid">
        <div class="my-admin-content-center">
            <h2 class="my-admin-header">{{ $user_row->name }}</h2>
            <div class="my-delete-client-div">
                <form action="/admin/{{ $user_row->name }}" method="post">
                    @csrf
                    <button type="submit" name="user-id" value="{{ $user_row->id }}" class="btn btn-delete-client"
                            @if ($user_row->hasRole('admin')) disabled @endif>
                        Delete {{ $user_row->role->name }}</button>
                </form>
            </div>
            <div class="my-table-margin col-lg-8 offset-lg-2 col-md-10 offset-md-1 table-responsive">
                <table class="table table-hover table-dark my-admin-table-fixed">
                    <thead>
                    <tr class="d-flex">
                        <th class="col-2">ID</th>
                        <th class="col-7">Door Name</th>
                        <th class="col-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($doors->count() < 1)
                        <tr><td class="col-12 my-no-rows-found-font-table">$$$ NO DOORS FOUND $$$</td></tr>
                    @endif
                    @foreach($doors as $d)
                        <form id="formDoor{{ $d->door->id }}" action="/admin/{{ $user_row->name }}"
                              method="post"></form>
                        <input form="formDoor{{ $d->door->id }}" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <tr class="d-flex">
                            <td scope="row" class="col-2">{{ $d->door->id }}</td>
                            <td class="col-7">{{ $d->door->door_name }}</td>
                            <td class="col-3"><input form="formDoor{{ $d->door->id }}" type="submit"
                                                              value="Delete" class="btn btn-delete"></td>
                            <input form="formDoor{{ $d->door->id }}" type="hidden" name="door-id"
                                   value="{{ $d->door->id }}">
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection