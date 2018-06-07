@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div id="start-search" class="text-center">
    <div class="my-transaction-margin">
        <button class="btn btn-search" onclick="showInputs()">Start Search</button>
    </div>
</div>
<div id="submit-search">
    <form id="big-artificial-form" onsubmit="return submit_reload_big()">
        <div class="my-transaction-margin offset-2 col-8">
            <div class="form-row">
                <div class="form-row my-additional-margin-for-userinput col-5">
                    <label for="username-big" class="padding-search-label">Username:</label>
                    <div class="my-username-width">
                        <input id="username-big" type="search" onkeyup="reload_big()" class="my-input-padding form-control" name="username" placeholder="Username ..." autocomplete="off">
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="form-row col-4">
                    <label for="date-big" class="padding-search-label">Date:</label>
                    <div class="my-date-width">
                        <input id="date-big" type="search" onkeyup="reload_big()" class="my-input-padding form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
                    </div>
                </div>
                <div class="my-additional-margin-for-btn col-2">
                    <div class="put-btn-right">
                        <button type="submit" class="btn btn-search">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="little-artificial-form" onsubmit="return submit_reload_little()">
        <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="form-row my-additional-margin-for-input">
                <div class="form-row col-8">
                    <label for="username-little" class="col-4 padding-search-label">Username:</label>
                    <div class="col-8">
                        <div class="my-username-width">
                            <input id="username-little" type="search" onkeyup="reload_little()" class="my-input-padding form-control" name="username" placeholder="Username ..." autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-additional-margin-for-input">
                <div class="form-row col-8">
                    <label for="date-little" class="col-4 padding-search-label">Date:</label>
                    <div class="col-8">
                        <div class="my-date-width">
                            <input id="date-little" type="search" onkeyup="reload_little()" class="my-input-padding form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="my-additional-margin-for-btn col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="put-btn-right">
                        <button type="submit" class="btn btn-search">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="very-little-artificial-form" onsubmit="return submit_reload_verylittle()">
        <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="form-row my-additional-margin-for-input">
                <label for="username-verylittle" class="col-4 padding-search-label">Username:</label>
                <div class="col-8">
                    <div class="my-username-width">
                        <input id="username-verylittle" type="search" onkeyup="reload_verylittle()" class="my-input-padding form-control" name="username" placeholder="Username ..." autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-row my-additional-margin-for-input">
                <label for="date-verylittle" class="col-4 padding-search-label">Date:</label>
                <div class="col-8">
                    <div class="my-date-width">
                        <input id="date-verylittle" type="search" onkeyup="reload_verylittle()" class="my-input-padding form-control" name="date" placeholder="yyyy-mm-dd" autocomplete="off">
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
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
    function reload_little()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-little").val() + "&date=" + $("#date-little").val());
    }
    function reload_verylittle()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-verylittle").val() + "&date=" + $("#date-verylittle").val());
    }

    function submit_reload_big()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submit/ajax?username=" + $("#username-big").val() + "&date=" + $("#date-big").val());
        $("#username-big").val("");
        $("#date-big").val("");
        return false;
    }
    function submit_reload_little()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submit/ajax?username=" + $("#username-little").val() + "&date=" + $("#date-little").val());
        $("#username-little").val("");
        $("#date-little").val("");
        return false;
    }
    function submit_reload_verylittle()
    {
        $("#submit-search").hide();
        $("#start-search").show();
        $("#my-agile-tbody").load("transactions/submit/ajax?username=" + $("#username-verylittle").val() + "&date=" + $("#date-verylittle").val());
        $("#username-verylittle").val("");
        $("#date-verylittle").val("");
        return false;
    }
</script>
@endsection