<!DOCTYPE html>
<html>
<head>
	<title>Online MySQL Editor</title>
	<?php require('login.php');?>
</head>
</html>
<body>
	<div class="container">
		<div class="data">
			<h3>Hello, <?php echo $_SESSION['username'] . "!"; ?></h3>
			<ul>
				<?php
					$sql = "select student_name, student_age from TB01";
					$result = $conn->query($sql);
					$row_cnt = $result->num_rows;
					echo $row_cnt . "\n";
					echo "<pre>";
					while ($row = $result->fetch_array()) {
						//echo "<li>ID: " . $row['student_id'] . ", Name: " . $row['student_name'] .  ", age: " . $row['student_age'] . "\n</li>";
						echo "<li>Name: " . $row['student_name'] . ", age: " . $row['student_age'] . ", ID: " . $row['student_id'] . "</li>";
					}
					echo "</pre>";
				?>
			</ul>
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
