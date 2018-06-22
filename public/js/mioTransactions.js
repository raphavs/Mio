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