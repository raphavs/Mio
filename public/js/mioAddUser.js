$("#add-existing-user").hide();
$("#not-error").hide();
$("#wrong-error").hide();
$("#already-error").hide();

function showNew() {
    $("#add-existing-user").hide();
    $("#add-new-user").show();
}

function showExisting() {
    $("#add-new-user").hide();
    $("#add-existing-user").show();
}