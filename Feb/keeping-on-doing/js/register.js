$(document).ready(function() {
	$password_check = true;
	
	$("#password_not_match").hide();

	$("#password_check").keyup(function() {
		if ($("#password_check").val() != $("#password").val()) {
			$("#password_not_match").show();
			$password_check = false;
			chk();
		} else {
			$("#password_not_match").hide();
			$password_check = true;
			chk();
		}
	});

	$("#password").focusout(function() {
		if ($("#password_check").val() != $("#password").val()) {
			$("#password_not_match").show();
			$password_check = false;
			chk();
		} else {
			$("#password_not_match").hide();
			$password_check = true;
			chk();
		}
	});
});

function chk() {
	if ($password_check) {
		$("#submit").removeClass("disabled");
		$("#submit").prop('disabled', false);
	} else {
		$("#submit").addClass("disabled");
		$("#submit").prop('disabled', true);
	}
};
