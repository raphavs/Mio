function showNew(){$("#add-existing-user").hide(),$("#add-new-user").show()}function showExisting(){$("#add-new-user").hide(),$("#add-existing-user").show()}function checkValidation(){return!($(":checkbox:checked").length<=0)||(showCheckboxError(),!1)}function showCheckboxError(){$("#checkboxes-id").hide(),$("#checkboxes-error").show(),setTimeout(function(){$("#checkboxes-error").hide(),$("#checkboxes-id").show()},3e3)}function showInputs(){$("#start-search").hide(),$("#submit-search").show()}function reload_big(){$("#my-agile-tbody").load("transactions/ajax?username="+$("#username-big").val()+"&date="+$("#date-big").val())}function reload_big_role_user(){$("#my-agile-tbody").load("transactions/ajax?date="+$("#date-big").val())}function reload_little(){$("#my-agile-tbody").load("transactions/ajax?username="+$("#username-little").val()+"&date="+$("#date-little").val())}function reload_little_role_user(){$("#my-agile-tbody").load("transactions/ajax?date="+$("#date-little").val())}function reload_verylittle(){$("#my-agile-tbody").load("transactions/ajax?username="+$("#username-verylittle").val()+"&date="+$("#date-verylittle").val())}function reload_verylittle_role_user(){$("#my-agile-tbody").load("transactions/ajax?date="+$("#date-verylittle").val())}function submit_reload_big(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?username="+$("#username-big").val()+"&date="+$("#date-big").val()),$("#username-big").val(""),$("#date-big").val(""),!1}function submit_reload_big_role_user(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?date="+$("#date-big").val()),$("#date-big").val(""),!1}function submit_reload_little(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?username="+$("#username-little").val()+"&date="+$("#date-little").val()),$("#username-little").val(""),$("#date-little").val(""),!1}function submit_reload_little_role_user(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?date="+$("#date-little").val()),$("#date-little").val(""),!1}function submit_reload_verylittle(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?username="+$("#username-verylittle").val()+"&date="+$("#date-verylittle").val()),$("#username-verylittle").val(""),$("#date-verylittle").val(""),!1}function submit_reload_verylittle_role_user(){return $("#submit-search").hide(),$("#start-search").show(),$("#my-agile-tbody").load("transactions/submitajax?date="+$("#date-verylittle").val()),$("#date-verylittle").val(""),!1}function showNew(){$("#add-existing-user").hide(),$("#add-new-user").show()}function showExisting(){$("#add-new-user").hide(),$("#add-existing-user").show()}function showNew(){$("#add-existing-user").hide(),$("#add-new-user").show()}function showExisting(){$("#add-new-user").hide(),$("#add-existing-user").show()}function showNew(){$("#add-existing-user").hide(),$("#add-new-user").show()}function showExisting(){$("#add-new-user").hide(),$("#add-existing-user").show()}$("#div-add-door-form").hide(),$("#btn-close-add-door").hide(),$("#door-already-exists-error").hide(),$("#btn-add-door").click(function(){$("#div-manage-clients").hide(),$("#div-doors").hide(),$("#btn-add-door").hide(),$("#btn-close-add-door").show(),$("#div-add-door-form").show()}),$("#btn-close-add-door").click(function(){$("#div-add-door-form").hide(),$("#btn-close-add-door").hide(),$("#div-manage-clients").show(),$("#div-doors").show(),$("#btn-add-door").show(),$("#new-door-id").val("")}),$("#add-existing-user").hide(),$("#not-error").hide(),$("#wrong-error").hide(),$("#already-error").hide(),$("#div-manage-clients").hide(),$("#div-doors").hide(),$("#btn-add-door").hide(),$("#input-field-doorname").hide(),$("#btn-close-add-door").show(),$("#div-add-door-form").show(),$("#door-already-exists-error").show(),setTimeout(function(){$("#door-already-exists-error").hide(),$("#input-field-doorname").show()},3e3),$("#btn-add-door").click(function(){$("#div-manage-clients").hide(),$("#div-doors").hide(),$("#btn-add-door").hide(),$("#btn-close-add-door").show(),$("#div-add-door-form").show()}),$("#btn-close-add-door").click(function(){$("#div-add-door-form").hide(),$("#btn-close-add-door").hide(),$("#div-manage-clients").show(),$("#div-doors").show(),$("#btn-add-door").show(),$("#new-door-id").val("")}),$("#checkboxes-error").hide(),$("#time-value-from").text($("#my-from-range").val().toString()+" h"),$("#time-value-to").text($("#my-to-range").val().toString()+" h"),$("#my-from-range").on("input",function(){$(this).val()>=parseInt($("#my-to-range").val())&&$(this).val(parseInt($("#my-to-range").val())-1),$("#time-value-from").text($(this).val().toString()+" h")}),$("#my-to-range").on("input",function(){$(this).val()<=parseInt($("#my-from-range").val())&&$(this).val(parseInt($("#my-from-range").val())+1),$("#time-value-to").text($(this).val().toString()+" h")}),$("#submit-search").hide(),$("#add-new-user").hide(),$("#not-error").hide(),$("#wrong-error").hide(),$("#div-existing-email").hide(),$("#div-existing-password").hide(),$("#add-btn").hide(),$("#add-existing-user").show(),$("#already-error").show(),setTimeout(function(){$("#already-error").hide(),$("#div-existing-email").show(),$("#div-existing-password").show(),$("#add-btn").show()},5e3),$("#add-new-user").hide(),$("#wrong-error").hide(),$("#already-error").hide(),$("#div-existing-email").hide(),$("#add-btn").hide(),$("#add-existing-user").show(),$("#not-error").show(),setTimeout(function(){$("#not-error").hide(),$("#div-existing-email").show(),$("#add-btn").show()},3e3),$("#add-new-user").hide(),$("#already-error").hide(),$("#not-error").hide(),$("#div-existing-password").hide(),$("#add-btn").hide(),$("#add-existing-user").show(),$("#wrong-error").show(),setTimeout(function(){$("#wrong-error").hide(),$("#div-existing-password").show(),$("#add-btn").show()},3e3);