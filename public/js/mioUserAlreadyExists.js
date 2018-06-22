$("#add-new-user").hide();
$("#not-error").hide();
$("#wrong-error").hide();
$("#div-existing-email").hide();
$("#div-existing-password").hide();
$("#add-btn").hide();
$("#add-existing-user").show();
$("#already-error").show();
setTimeout(function () {
        $("#already-error").hide();
        $("#div-existing-email").show();
        $("#div-existing-password").show();
        $("#add-btn").show();
    },
    5000
);

function showNew() {
    $("#add-existing-user").hide();
    $("#add-new-user").show();
}

function showExisting() {
    $("#add-new-user").hide();
    $("#add-existing-user").show();
}