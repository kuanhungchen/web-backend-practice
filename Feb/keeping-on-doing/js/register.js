$(document).ready(function() {
	$password_check = true;
	
	$("#password_not_match").hide();
	$("#password_check").keyup(function() {
		if ($("#password").val() != $("#password_check").val()) {
			$("#password_not_match").show();
			$password_check = false;
			check();
		} else {
			$("#password_not_match").hide();
			$password_check = true;
			check();
		}
	});

	$("#password_check").focusout(function() {
		if ($("#password").val() != $("#password_check").val()) {
			$("#password_not_match").show();
			$password_check = false;
			check();
		} else {
			$("#password_not_match").hide();
			$password_check = true;
			check();
		}
	});
});

function check() {
	if ($password_check) {
		$("#submit").removeClass("disabled");
		$("#submit").prop('disabled', false);
	} else {
		$("#submit").addClass("disabled");
		$("#submit").prop('disabled', true);
	}
};
