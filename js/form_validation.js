/////  Registration Form Validation
error_messages = {email_1:"Please enter correct email.", email_2:"This email has already been used. Please try another", email_3:"Please enter same email.", email_4:"Please fill this."};

//  Email Availabilty
$("#email_val").change(function() {
	reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
	// $("#register_button").prop("disabled",true);
	$("#confirm_email_val").prop("disabled",true);
	var first_email = $("#email_val");
	var error_div = $("#email_error");
	if (first_email.val() != "") {
		if (validateEmail(first_email.val())) {
			reset_error(["email_error","email_val"],"error");
			var email_table = first_email.attr("data-table");
			$.when(email_availabilty(email_table,first_email.val(),error_div)).then(function(x) {
				if ($("#email_availabilty").val() == "1") {
					reset_error(["email_error","email_val"],"error");
					var second_email = $("#confirm_email_val");
					var error_div2 = $("#email_error1");
					// $("#register_button").prop("disabled",false);
					$("#confirm_email_val").prop("disabled",false);
					if (second_email.val() != "") {
						if (check_equals(first_email.val(),second_email.val())) {
							reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
							// $("#register_button").prop("disabled",false);
							$("#confirm_email_val").prop("disabled",false);
						} else {
							// $("#register_button").prop("disabled",true);
							second_email.addClass("error");
							error_div2.addClass("error");
							error_div2.text(error_messages.email_3);
						}
					}
				} else {
					first_email.addClass("error");
					error_div.addClass("error");
					error_div.text(error_messages.email_2);
				}
			});
		} else {
			first_email.addClass("error");
			error_div.addClass("error");
			error_div.text(error_messages.email_1);
		}
	} else {
		first_email.addClass("error");
		error_div.addClass("error");
		error_div.text(error_messages.email_4);
	}
});


//  Same Email
$("#confirm_email_val").change(function() {
	reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
	var first_email = $("#email_val");
	var second_email = $("#confirm_email_val");
	var error_div = $("#email_error");
	var error_div2 = $("#email_error1");
	if (first_email.val() != "") {
		reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
		// $("#register_button").prop("disabled",false);
	}  else {
		first_email.addClass("error");
		error_div.addClass("error");
		error_div.text(error_messages.email_4);
	}
	if (second_email.val() != "") {
		if (check_equals(first_email.val(),second_email.val())) {
			reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
			// $("#register_button").prop("disabled",false);
		} else {
			// $("#register_button").prop("disabled",true);
			second_email.addClass("error");
			error_div2.addClass("error");
			error_div2.text(error_messages.email_3);
		}
	} else {
		// $("#register_button").prop("disabled",true);
		second_email.addClass("error");
		error_div2.addClass("error");
		error_div2.text(error_messages.email_4);
	}
});


//// Reset All

$(".email_input").keyup(function() {
	reset_error(["email_error","email_error1","email_val","confirm_email_val"],"error");
	$("#email_error").text("Email Address");
	$("#email_error1").text("Confirm Email Address");
});


//////////   Password

var regixs_array = [8,/([a-zA-Z])/,/([0-9])/,/([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/];

$("#password_val").focus(function() {
	$(".password-conditions-div").fadeIn();
	var password_val = $("#password_val");
	var password_error_div = $("#password_error_div");
	var list_div = "conditions-list";
	check_password(password_val.val(),password_error_div,list_div)
});

$("#password_val").focusout(function() {
	$(".password-conditions-div").fadeOut();
});

$("#password_val").keyup(function() {
	// $("#confirm_password_val").prop("disabled",true);
	var password_val = $("#password_val");
	var password_error_div = $("#password_error_div");
	var list_div = "conditions-list";
	if (check_password(password_val.val(),password_error_div,list_div) == 4) {
		password_val.removeClass("error");
		password_error_div.removeClass("error");
		password_error_div.html("Password");
		// $("#confirm_password_val").prop("disabled",false);
	} else {
		// $("#register_button").prop("disabled",true);
		password_val.addClass("error");
		password_error_div.addClass("error");
		password_error_div.html("Enter strong password");
	}
});

$("#confirm_password_val").change(function() {
	// $("#register_button").prop("disabled",true);
	reset_error(["password_error_div","confirm_password_error_div","password_val","confirm_password_val"],"error");
	var password_val = $("#password_val");
	var password_error_div = $("#password_error_div");
	var confirm_password_val = $("#confirm_password_val");
	var confirm_password_error_div = $("#confirm_password_error_div");
	if (password_val.val() != "") {
		reset_error(["password_error_div","confirm_password_error_div","password_val","confirm_password_val"],"error");
		// $("#register_button").prop("disabled",false);
	}  else {
		// $("#register_button").prop("disabled",true);
		password_val.addClass("error");
		password_error_div.addClass("error");
		password_error_div.text("Please fill this.");
	}
	if (confirm_password_val.val() != "") {
		if (check_equals(password_val.val(),confirm_password_val.val())) {
			// $("#register_button").prop("disabled",false);
			confirm_password_val.removeClass("error");
			confirm_password_error_div.removeClass("error");
			confirm_password_error_div.html("Confirm Password");
		} else {
			// $("#register_button").prop("disabled",true);
			confirm_password_val.addClass("error");
			confirm_password_error_div.addClass("error");
			confirm_password_error_div.html("Enter same password.");
		}
	} else {
		// $("#register_button").prop("disabled",true);
		confirm_password_val.addClass("error");
		confirm_password_error_div.addClass("error");
		confirm_password_error_div.html("Please fill this.");
	}
});

$(".password_input").keyup(function() {
	reset_error(["confirm_password_error_div","confirm_password_val"],"error");
	// $("#password_error_div").text("Password");
	$("#confirm_password_error_div").text("Confirm Password");
});


function check_password(password,error_div,list_div) {
	var password_count = 0;
	for (var i=0; i<regixs_array.length;i++) {
		if (i == 0) {
			if (password.length >= 8) {
				$("."+list_div+" li:eq(0)").addClass("done");
				password_count++;
			} else {
				$("."+list_div+" li:eq(0)").removeClass("done");
			}
		} else if (i == 1) {
			if (password.match(regixs_array[i])) {
				$("."+list_div+" li:eq(1)").addClass("done");
				password_count++;
			} else {
				$("."+list_div+" li:eq(1)").removeClass("done");
			}
		} else if (i == 2) {
			if (password.match(regixs_array[i])) {
				$("."+list_div+" li:eq(2)").addClass("done");
				password_count++;
			} else {
				$("."+list_div+" li:eq(2)").removeClass("done");
			}
		} else if (i == 3) {
			if (password.match(regixs_array[i])) {
				$("."+list_div+" li:eq(3)").addClass("done");
				password_count++;
			} else {
				$("."+list_div+" li:eq(3)").removeClass("done");
			}
		}
	}
	return password_count;
}


function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function email_availabilty(table,email,div) {
	$.ajax({
		type: 'POST',
		data: {
			table:table,
			email:email
		},
		url : "resources/ajax_calls/email_availabilty.php",
		beforeSend: function(){
			div.html("<i class='fa fa-spinner fa-spin'></i> Checking");
			$("#confirm_email_val").prop("disabled",true);
		},
		error:function(){
			div.html("Error in checking. Try Again.");
			div.addClass("error");
			$("#confirm_email_val").prop("disabled",true);
		},
		success: function(resp){
			div.html("Email Address");
			div.removeClass("error");
			div.siblings("input").removeClass("error");
			$("#email_availabilty").val(resp);
			$("#confirm_email_val").prop("disabled",false);
		}
	});
}

function check_equals(first,second)
{
	if (first == second) {
		return true;
	} else {
		return false;
	}
}

function reset_error(error_elements,error_class) {
	for(var i=0; i<error_elements.length; i++){
		$("#"+error_elements[i]).removeClass(error_class);
	}
}


//////  Masking

$(document).ready(function() {
	$("#dob_mask").inputmask("datetime", {
		inputFormat: "dd/mm/yyyy",
		outputFormat: "dd/mm/yyyy",
		inputEventOnly: true
	});

	$("#ssn_mask").inputmask("999-99-9999");
});

$("#ssn_number_confirm").change(function() {
	if ($("#ssn_number_confirm").prop("checked")) {
		$("#ssn_mask").prop("disabled",true);
		$("#ssn_mask").prop("required",false);
		$("#ssn_mask").addClass("correct");
		$("#ssn_mask").removeClass("error");
		$("#ssn_mask").siblings("label").removeClass("error").html("Social Security Number");
	} else {
		$("#ssn_mask").prop("disabled",false);
		$("#ssn_mask").prop("required",true);
		$("#ssn_mask").removeClass("correct");
	}
});

$(".first_validation").change(function() {
	if ($(this).val() !="") {
		$(".first_validation").removeClass("error");
		$("#field_error_div").hide();
	} else {
		$(".first_validation").addClass("error");
		$("#field_error_div").show();
	}
});

$(".second_validation").change(function() {
	if ($(this)[0].files.length ==0)  {
		$(".second_validation").parent().parent().parent().addClass("uploadBtn_error");
		$("#upload_error_div").show();
	} else {
		$(".second_validation").parent().parent().parent().removeClass("uploadBtn_error");
		$("#upload_error_div").hide();
	}
});

$("#ssn_card").change(function() {
	if ($(this)[0].files.length == 0)  {
		$("#upload_5_main").addClass("uploadBtn_error");
		console.log("added")
	} else {
		console.log("removed")
		$("#upload_5_main").removeClass("uploadBtn_error");
	}
});

$(".third_validation").change(function() {
	if ($(this).val() !="") {
		$(".third_validation").removeClass("error");
		$("#field_error_div").hide();
	} else {
		$(".third_validation").addClass("error");
		$("#field_error_div").show();
	}
});

$(".forth_validation").change(function() {
	if ($(this)[0].files.length ==0) {
		$(".forth_validation").parent().parent().parent().addClass("uploadBtn_error");
		$("#upload_error_div").show();
	} else {
		$(".forth_validation").parent().parent().parent().removeClass("uploadBtn_error");
		$("#upload_error_div").hide();
	}
});

$(".close_checkbox").change(function() {
	var close_prop = $(this).prop("checked");
	var div_class = $(this).attr("data-for");
	if (close_prop) {
		// $("."+div_class+"_input").prop("required",false);
		$("."+div_class+"_input").prop("disabled",true);
		$("."+div_class+"_input").val("");
		$("."+div_class+"_input").attr("name","");
		$("."+div_class+"_checkbox").attr("name",div_class+"[]");
	} else {
		// $("."+div_class+"_input").prop("required",true);
		$("."+div_class+"_input").prop("disabled",false);
		$("."+div_class+"_input").attr("name",div_class+"[]");
		$("."+div_class+"_checkbox").attr("name","");
	}
});

///////   EDC Form

$(function(){
	$("#EDCForm").submit(function(event){
		var current_validation_count = $(".validate_it").length;
		var validator_count = 0;
		$(".validate_it").each(function() {
			if ($(this).val() == "") {
				if (!$(this).hasClass("correct")) {
					$(this).addClass("error");
					$(this).siblings("label").addClass("error").html("Please insert the required information.");;
				} else {
					var input_index = $(this).attr("data-index");
					$(this).removeClass("error");
					$(this).siblings("label").removeClass("error").html(current_html[input_index]);
					validator_count++;
				}
			} else {
				var input_index = $(this).attr("data-index");
				$(this).removeClass("error");
				$(this).siblings("label").removeClass("error").html(current_html[input_index]);
				validator_count++;
			}
		});
		event.preventDefault();
		var file_check = false;
		var field_check = false;
		if (!check_files(".forth_validation")) {
			$(".forth_validation").parent().parent().parent().addClass("uploadBtn_error");
			$("#upload_error_div").show();
		} else {
			$(".forth_validation").parent().parent().parent().removeClass("uploadBtn_error");
			$("#upload_error_div").hide();
			var file_check = true;
		}

		if (!check_fields(".third_validation")) {
			$(".third_validation").addClass("error");
			$("#field_error_div").show();
		} else {
			$(".third_validation").removeClass("error");
			$("#field_error_div").hide();
			var field_check = true;
		}

		if (file_check && field_check && validator_count == current_validation_count) {
			$("#register_button").html("<i class='fa fa-spinner fa-spin'></i>");
			$.ajax({
				method: 'POST',
				url: 'resources/ajax_calls/edc_registration.php',
				dataType: "html",
				data : $('#EDCForm').serialize(),
				success: function(data){
					if (data == "2") {
						$("#email_val").addClass("error");
						$("#email_error").addClass("error");
						$("#email_error").html(error_messages.email_2);
						$(window).scrollTop($('#business_details').offset().top);
					} else if (data == "3") {
						$("#email_val").addClass("error");
						$("#confirm_email_val").addClass("error");
						$("#email_error1").addClass("error");
						$("#email_error1").html(error_messages.email_3);
						$(window).scrollTop($('#business_details').offset().top);
					} else if (data == "4") {
						$("#password_val").addClass("error");
						$("#confirm_password_val").addClass("error");
						$("#confirm_password_error_div").addClass("error");
						$("#confirm_password_error_div").html("Please enter same password.");
						$(window).scrollTop($('#business_details').offset().top);
					} else if (data == "1") {
						registeration_success_edc();
					}
					$("#register_button").html("SUBMIT");
				},
				error: function(xhr, desc, err){
					console.log(err);
				}
			});
		}
	});
});

//////  UBI Form
var current_html=[];
$(document).ready(function() {
	var index_count = 0;
	$(".validate_it").each(function() {
		$(this).attr("data-index",index_count);
		var label_html = $(this).siblings("label").html();
		current_html.push(label_html);
		index_count++;
	});
});

$(".validate_it").keyup(function() {
	var input_index = $(this).attr("data-index");
	$(this).removeClass("error");
	$(this).siblings("label").removeClass("error").html(current_html[input_index]);
});

$(".validate_it").change(function() {
	var input_index = $(this).attr("data-index");
	$(this).removeClass("error");
	$(this).siblings("label").removeClass("error").html(current_html[input_index]);
});

$(function(){
	$("#UBIForm").submit(function(event){
		var current_validation_count = $(".validate_it").length;
		var validator_count = 0;
		$(".validate_it").each(function() {
			if ($(this).val() == "") {
				if (!$(this).hasClass("correct")) {
					$(this).addClass("error");
					$(this).siblings("label").addClass("error").html("Please insert the required information.");;
				} else {
					var input_index = $(this).attr("data-index");
					$(this).removeClass("error");
					$(this).siblings("label").removeClass("error").html(current_html[input_index]);
					validator_count++;
				}
			} else {
				var input_index = $(this).attr("data-index");
				$(this).removeClass("error");
				$(this).siblings("label").removeClass("error").html(current_html[input_index]);
				validator_count++;
			}
		});
		event.preventDefault();
		var file_check = false;
		var field_check = false;
		var ssn_card_val = false;
		if (!check_files(".second_validation")) {
			$(".second_validation").parent().parent().parent().addClass("uploadBtn_error");
			$("#upload_error_div").show();
		} else {
			$(".second_validation").parent().parent().parent().removeClass("uploadBtn_error");
			$("#upload_error_div").hide();
			var file_check = true;
		}

		if (!check_fields(".first_validation")) {
			$(".first_validation").addClass("error");
			$("#field_error_div").show();
		} else {
			$(".first_validation").removeClass("error");
			$("#field_error_div").hide();
			var field_check = true;
		}

		if (!check_fields("#ssn_card")) {
			$("#ssn_card").parent().parent().parent().addClass("uploadBtn_error");
		} else {
			$("#ssn_card").parent().parent().parent().removeClass("uploadBtn_error");
			var ssn_card_val = true;
		}

		if (file_check && field_check && current_validation_count == validator_count && ssn_card_val) {
			$("#register_button").html("<i class='fa fa-spinner fa-spin'></i>");
			$.ajax({
				method: 'POST',
				url: 'resources/ajax_calls/ubi_registration.php',
				dataType: "html",
				data : $('#UBIForm').serialize(),
				success: function(data){
					if (data == "2") {
						$("#email_val").addClass("error");
						$("#email_error").addClass("error");
						$("#email_error").html(error_messages.email_2);
						$(window).scrollTop($('#personal_information').offset().top);
					} else if (data == "3") {
						$("#email_val").addClass("error");
						$("#confirm_email_val").addClass("error");
						$("#email_error1").addClass("error");
						$("#email_error1").html(error_messages.email_3);
						$(window).scrollTop($('#personal_information').offset().top);
					} else if (data == "4") {
						$("#password_val").addClass("error");
						$("#confirm_password_val").addClass("error");
						$("#confirm_password_error_div").addClass("error");
						$("#confirm_password_error_div").html("Please enter same password.");
						$(window).scrollTop($('#personal_information').offset().top);
					} else if (data == "1") {
						registeration_success_ubi();
					}
					$("#register_button").html("SUBMIT");
				},
				error: function(xhr, desc, err){
					console.log(err);
				}
			});
		}
	});
});

function check_files(input) {
	var init = 0;
	$(input).each(function() {
		if ($(this)[0].files.length !=0) {
			init++;
		}
	});
	if (init > 0) {
		return true;
	} else {
		return false;
	}
}

function check_fields(input) {
	var init = 0;
	$(input).each(function() {
		if ($(this).val() !="") {
			init++;
		}
	});
	if (init > 0) {
		return true;
	} else {
		return false;
	}
}