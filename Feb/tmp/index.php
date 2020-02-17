<!DOCTYPE html>
<html>
<head>
	<title>Online MySQL Editor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php require('login.php');?>
</head>
</html>
<body>
	<div class="container">
		<h3>Hello, <?php echo $_SESSION['username'] . "!"; ?></h3>
		<?php
			$sql = "select * from TB01";
			$result = $conn->query($sql);
			$row_cnt = $result->num_rows;
			printf("Number of data: %d", $row_cnt);
		?>
		<div class="data">
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
				</tr>
				<?php
					while ($row = $result->fetch_array()) {
						echo "<tr>";
						printf("<td>%d</td><td>%s</td><td>%d</td>",$row['student_id'], $row['student_name'], $row['student_age']);
						echo "</tr>";
					}
				?>
			</table>
		</div>
		<div class="edit">
			<form action="insert.php" method="post">
				<div>
					<label for="sdt_id">Student ID</label>
					<input type="insert" name="sdt_id">
				</div>
				<div>
					<label for="sdt_name">Student name</label>
					<input type="insert" name="sdt_name">
				</div>
				<div>
					<label for="sdt_age">Student age </label>
					<input type="insert" name="sdt_age">
				</div>
				<div>
					<input type="submit" value="Insert">
				</div>
			</form>
		</div>
	</div>
</body>
