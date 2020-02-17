<?php
	session_start();
	if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
		header("Location: ../dashboard/index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="../js/register.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">REGISTER</h3>
		<form method="post" action="../setting/userop.php?action=register">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="nickname">Nickname</label>
				<input type="text" class="form-control" id="nickname" name="nickname" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="password_check">Password check</label>
				<input type="password" class="form-control" id="password_check" name="password_check" required>
				<p class="text-danger" id="password_not_match">Passwords didn't match.</p>
			</div>
			<a href="../login/index.php" class="btn btn-default">Login</a>
			<button type="submit" class="btn btn-primary pull-right" id="submit">Register</button>
		</form>
	</div>

</body
</html>
