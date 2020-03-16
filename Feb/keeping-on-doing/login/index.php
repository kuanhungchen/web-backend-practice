<?php
	session_start();
	if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
		header("Location: ../dashboard/index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Keeping on Doing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<body>
<div class="container">
	<br><br><br><br>
	<div class="panel panel-default">
		<h3 align="center">Keeping on Doing</h3>
		<div class="panel-body">
			<form method="post" action="auth.php?action=login">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
				<a class="btn btn-default" href="../login/register.php">Register</a>
				<button type="submit" class="btn btn-default pull-right">Login</button>
			</form>
		</div>
		<?php
			if (isset($_GET["status"]) && $_GET["status"] == "incorrect") {?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Incorrect password.
				</div>
			<?php } else if (isset($_GET["status"]) && $_GET["status"] == "notfound") {?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Account not found.
				</div>
			<?php } else if (isset($_GET["status"]) && $_GET["status"] == "logreq") {?>
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Please log in.
				</div>
			<?php } else if (isset($_GET["status"]) && $_GET["status"] == "logout") {?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Logged out successfully.
				</div>
			<?php } else if (isset($_GET["status"]) && $_GET["status"] == "registered") {?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					Registered successfully.
				</div>
			<?php }?>
	</div>
</div>
</body>
</html>
