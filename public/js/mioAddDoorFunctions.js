$("#btn-add-door").click(function () {
    $("#div-manage-clients").hide();
    $("#div-doors").hide();
    $("#btn-add-door").hide();
    $("#btn-close-add-door").show();
    $("#div-add-door-form").show();
});

$("#btn-close-add-door").click(function () {
    $("#div-add-door-form").hide();
    $("#btn-close-add-door").hide();
    $("#div-manage-clients").show();
    $("#div-doors").show();
    $("#btn-add-door").show();
    $("#new-door-id").val("");
});