<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Keeping on Doing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<?php require("../nav.php"); ?>
	</div>
	<div class="row container">
		<div class="col-lg-12 container">
			<h3> Current Tasks</h3>
			<table class="table table-hover table-bordered">
				<col width="25%">
				<col width="55%">
				<col width="20%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Progress</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if (count($_SESSION['task_names']) == 0) {
							echo "<tr><td class=\"text-center\" colspan=\"3\">You don't have any task currently.</td></tr>";
						} else {
							for ($i=0; $i<count($_SESSION['task_names']); $i++) {
								printf("<tr><td>%s</td><td>%s</td><td>%d</td></tr>", $_SESSION['task_names'][$i], $_SESSION['task_descrs'][$i], $_SESSION['task_days'][$i]);
								echo "<a class=\"btn btn-danger btn-xs\" href=\"#\" role=\"button\" onclick=\"book('delete', $uid, $i)\" id=\"delbtn\">Delete</a>";
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
