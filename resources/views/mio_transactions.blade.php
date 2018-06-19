@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-bp-search-position">
    <h1 class="my-doors-header">{{ $door }}</h1>
    <div id="start-search" class="text-center">
        <div class="my-transaction-margin">
            <button class="btn btn-search" onclick="showInputs()">Start Search</button>
        </div>
    </div>
    <div id="submit-search">
        <form id="big-artificial-form" onsubmit="@if ($role_id == 3) return submit_reload_big_role_user(); @else return submit_reload_big(); @endif">
            <div class="my-transaction-margin @if ($role_id == 3) offset-3 col-6 @else offset-2 col-8 @endif">
                <div class="form-row">
                    @if ($role_id != 3)
                        <div class="form-row col-5">
                            <label for="username-big" class="my-col-form-label">Username:</label>
                            <div class="my-username-width">
                                <input id="username-big" type="search" onkeyup="reload_big()" class="form-control" name="username" placeholder="Username ..." autocomplete="off">
                            </div>
                        </div>
                        <div class="col-1"></div>
                    @endif
                    <div class="form-row @if ($role_id == 3) col-9 @else col-4 @endif">
                        <label for="date-big" class="my-col-form-label">Date:</label>
                        <div class="my-date-width">
                            <input id="date-big" type="search" onkeyup="@if ($role_id == 3) reload_big_role_user(); @else reload_big(); @endif" class="form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
                        </div>
                    </div>
                    <div class="@if ($role_id == 3) col-3 @else my-additional-margin-for-btn col-2 @endif">
                        <button type="submit" class="btn btn-search put-btn-right">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <form id="little-artificial-form" onsubmit="@if ($role_id == 3) return submit_reload_little_role_user(); @else return submit_reload_little(); @endif">
            <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                @if ($role_id != 3)
                    <div class="form-row my-additional-margin-for-input">
                        <div class="form-row col-8">
                            <label for="username-little" class="col-4 my-col-form-label">Username:</label>
                            <div class="col-8">
                                <div class="my-username-width">
                                    <input id="username-little" type="search" onkeyup="reload_little()" class="form-control" name="username" placeholder="Username ..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-row my-additional-margin-for-input">
                    <div class="form-row col-8">
                        <label for="date-little" class="col-4 my-col-form-label">Date:</label>
                        <div class="col-8">
                            <div class="my-date-width">
                                <input id="date-little" type="search" onkeyup="@if ($role_id == 3) reload_little_role_user(); @else reload_little(); @endif" class="form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="my-additional-margin-for-btn col-lg-4 col-md-4 col-sm-4 col-4">
                        <button type="submit" class="btn btn-search put-btn-right">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <form id="very-little-artificial-form" onsubmit="@if ($role_id == 3) return submit_reload_verylittle_role_user(); @else return submit_reload_verylittle(); @endif">
            <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                @if ($role_id != 3)
                    <div class="form-row my-additional-margin-for-input">
                        <label for="username-verylittle" class="col-4 my-col-form-label">Username:</label>
                        <div class="col-8">
                            <div class="my-username-width">
                                <input id="username-verylittle" type="search" onkeyup="reload_verylittle()" class="form-control" name="username" placeholder="Username ..." autocomplete="off">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-row my-additional-margin-for-input">
                    <label for="date-verylittle" class="col-4 my-col-form-label">Date:</label>
                    <div class="col-8">
                        <div class="my-date-width">
                            <input id="date-verylittle" type="search" onkeyup="@if ($role_id == 3) reload_verylittle_role_user(); @else reload_verylittle(); @endif" class="form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-row my-additional-margin-for-input">
                   <div class="offset-4 col-8">
                       <button type="submit" class="btn btn-search">Search</button>
                   </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="row">
                <table class="table my-table-fixed">
                    <thead>
                    <tr>
                        <th class="col-2">ID</th>
                        <th class="col-4">Username</th>
                        <th class="col-3">Date</th>
                        <th class="col-3">Time</th>
                    </tr>
                    </thead>
                    <tbody id="my-agile-tbody">
                    @foreach($transactions as $v)
                        <tr>
                            <td class="col-2">{{ $v->id }}</td>
                            <td class="col-4">{{ $v->user_name }}</td>
                            <td class="col-3">{{ $v->entrance_date }}</td>
                            <td class="col-3">{{ $v->entrance_time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#submit-search").hide();

    function showInputs()
    {
        $("#start-search").hide();
        $("#submit-search").show();
    }

    function reload_big()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-big").val() + "&date=" + $("#date-big").val());
    }
    function reload_big_role_user()
    {
        $("#my-agile-tbody").load("transactions/ajax?date=" + $("#date-big").val());
    }
    function reload_little()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-little").val() + "&date=" + $("#date-little").val());
    }
    function reload_little_role_user()
    {
        $("#my-agile-tbody").load("transactions/ajax?date=" + $("#date-little").val());
    }
    function reload_verylittle()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-verylittle").val() + "&date=" + $("#date-verylittle").val());
    }
    function reload_verylittle_role_user()
    {
        $("#my-agile-tbody").load("transactions/ajax?date=" + $("#date-verylittle").val());
    }

    function submit_reload_big()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?username=" + $("#username-big").val() + "&date=" + $("#date-big").val());
        $("#username-big").val("");
        $("#date-big").val("");
        return false;
    }
    function submit_reload_big_role_user()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?date=" + $("#date-big").val());
        $("#date-big").val("");
        return false;
    }
    function submit_reload_little()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?username=" + $("#username-little").val() + "&date=" + $("#date-little").val());
        $("#username-little").val("");
        $("#date-little").val("");
        return false;
    }
    function submit_reload_little_role_user()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?date=" + $("#date-little").val());
        $("#date-little").val("");
        return false;
    }
    function submit_reload_verylittle()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?username=" + $("#username-verylittle").val() + "&date=" + $("#date-verylittle").val());
        $("#username-verylittle").val("");
        $("#date-verylittle").val("");
        return false;
    }
    function submit_reload_verylittle_role_user()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submitajax?date=" + $("#date-verylittle").val());
        $("#date-verylittle").val("");
        return false;
    }
</script>
@endsection