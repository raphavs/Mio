$("#add-new-user").hide();
$("#already-error").hide();
$("#not-error").hide();
$("#div-existing-password").hide();
$("#add-btn").hide();
$("#add-existing-user").show();
$("#wrong-error").show();
setTimeout(function () {
        $("#wrong-error").hide();
        $("#div-existing-password").show();
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