$("#checkboxes-error").hide();
$("#time-value-from").text($("#my-from-range").val().toString() + " h");
$("#time-value-to").text($("#my-to-range").val().toString() + " h");

$("#my-from-range").on("input", function()
{
    if ($(this).val() >= parseInt($("#my-to-range").val())) {
        $(this).val(parseInt($("#my-to-range").val()) - 1);
    }
    $("#time-value-from").text($(this).val().toString() + " h");
});

$("#my-to-range").on("input", function()
{
    if ($(this).val() <= parseInt($("#my-from-range").val())) {
        $(this).val(parseInt($("#my-from-range").val()) + 1);
    }
    $("#time-value-to").text($(this).val().toString() + " h");
});

function checkValidation()
{
    if ($(":checkbox:checked").length <= 0) {
        showCheckboxError();
        return false;
    }
    return true;
}

function showCheckboxError()
{
    $("#checkboxes-id").hide();
    $("#checkboxes-error").show();
    setTimeout(function()
        {
            $("#checkboxes-error").hide();
            $("#checkboxes-id").show();
        },
        3000
    );
}