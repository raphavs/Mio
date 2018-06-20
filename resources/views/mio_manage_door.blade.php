@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="my-doors-header">{{ $door }}</h1>
    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 offset-sm-1 col-sm-10">
        <div class="text-center my-links-font my-margin-for-links-managedoor">
            <div class="row">
                <div class="padding-manage-links col-md-6 offset-md-3">
                    <a class="@if ($relation_row->role_id == 3) my-disabled @else nav-link @endif" href="/home/{{ $door }}/adduser">Add User</a>
                </div>
            </div>
            <div class="row">
                <div class="padding-manage-links col-lg-6 col-md-6">
                    <a class="@if ($relation_row->role_id == 3) my-disabled @else nav-link @endif" href="/home/{{ $door }}/selectuser">Manage Rights</a>
                </div>
                <div class="padding-manage-links col-lg-6 col-md-6">
                    <a class="nav-link" href="/home/{{ $door }}/transactions">See Transactions</a>
                </div>
            </div>
        </div>
    </div>
    <div class="offset-1 col-10 offset-lg-4 col-lg-4 offset-md-3 col-md-6 offset-sm-2 col-sm-8">
        <form action="/open/{{ $door }}" method="post">
            @csrf
            <button type="submit" class="my-btn-open btn-open"
                @if((date('H:i:s') < $relation_row->from_time or date('H:i:s') > $relation_row->to_time) or $relation_row->$week_day == 0) disabled @endif>
                @if((date('H:i:s') < $relation_row->from_time or date('H:i:s') > $relation_row->to_time) or $relation_row->$week_day == 0) NO RIGHT @else Open @endif
            </button>
        </form>
    </div>
</div>
@endsection