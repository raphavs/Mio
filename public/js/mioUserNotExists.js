$("#add-new-user").hide();
$("#wrong-error").hide();
$("#already-error").hide();
$("#div-existing-email").hide();
$("#add-btn").hide();
$("#add-existing-user").show();
$("#not-error").show();
setTimeout(function () {
        $("#not-error").hide();
        $("#div-existing-email").show();
        $("#add-btn").show();
    },
    3000
);

function showNew() {
    $("#add-existing-user").hide();
    $("#add-new-user").show();
}

function showExisting() {
    $("#add-new-user").hide();
    $("#add-existing-user").show();
}