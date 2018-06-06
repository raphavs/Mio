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
    <div id="big-artificial-form">
        <div class="my-transaction-margin offset-2 col-8">
            <div class="form-row">
                <div class="form-row my-additional-margin-for-userinput col-5">
                    <label for="username" class="padding-search-label">Username:</label>
                    <div class="my-username-width">
                        <input id="username" type="search" onkeyup="reload()" class="my-input-padding form-control" name="username" placeholder="Username ...">
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="form-row col-4">
                    <label for="date" class="padding-search-label">Date:</label>
                    <div class="my-date-width">
                        <input id="date" type="date" onkeyup="reload()" class="my-input-padding form-control" name="date">
                    </div>
                </div>
                <div class="my-additional-margin-for-btn col-2">
                    <div class="put-btn-right">
                        <button id="my-artificial-submit" class="btn btn-search">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="little-artificial-form">
        <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="form-row my-additional-margin-for-input">
                <div class="form-row col-8">
                    <label for="username" class="col-4 padding-search-label">Username:</label>
                    <div class="col-8">
                        <div class="my-username-width">
                            <input id="username" type="search" onkeyup="reload()" class="my-input-padding form-control" name="username" placeholder="Username ...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-additional-margin-for-input">
                <div class="form-row col-8">
                    <label for="date" class="col-4 padding-search-label">Date:</label>
                    <div class="col-8">
                        <div class="my-date-width">
                            <input id="date" type="date" onkeyup="reload()" class="my-input-padding form-control" name="date">
                        </div>
                    </div>
                </div>
                <div class="my-additional-margin-for-btn col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="put-btn-right">
                        <button id="my-artificial-submit" class="btn btn-search">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="very-little-artificial-form">
        <div class="my-transaction-margin offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="form-row my-additional-margin-for-input">
                <label for="username" class="col-4 padding-search-label">Username:</label>
                <div class="col-8">
                    <div class="my-username-width">
                        <input id="username" type="search" onkeyup="reload()" class="my-input-padding form-control" name="username" placeholder="Username ...">
                    </div>
                </div>
            </div>
            <div class="form-row my-additional-margin-for-input">
                <label for="date" class="col-4 padding-search-label">Date:</label>
                <div class="col-8">
                    <div class="my-date-width">
                        <input id="date" type="date" onkeyup="reload()" class="my-input-padding form-control" name="date">
                    </div>
                </div>
            </div>
            <div class="form-row my-additional-margin-for-input">
               <div class="offset-4 col-8">
                   <button id="my-artificial-submit" class="btn btn-search">Search</button>
               </div>
            </div>
        </div>
    </div>
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

    function reload()
    {
        $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username").val() + "&date=" + $("#date").val());
    }

    $("#my-artificial-submit").click(
        function()
        {
            $("#submit-search").hide();
            $("#start-search").show();
            $("#my-agile-tbody").load("transactions/submit/ajax?username=" + $("#username").val() + "&date=" + $("#date").val());
            $("#username").val("");
        }
    );
</script>
@endsection