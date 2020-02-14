<?php
#session_start();
	require('login.php');
	echo "<pre>";
	echo "Now insert student to " . $_SESSION["username"] . "\n";
	$sdt_id = $_POST['sdt_id'];
	$sdt_name = $_POST["sdt_name"];
	$sdt_age = $_POST["sdt_age"];
	$sql = "insert into TB01 (student_id, student_name, student_age) values ($sdt_id , \"$sdt_name\",  $sdt_age);";
	if ($conn->query($sql)) {
		echo "Successfully inserted. Back to main page in 3 second...\n";
	} else {
		echo "Fair to insert. Back to main page in 3 second...\n";
	}
	$url = "index.php";
	echo "</pre>";
?>
<html>
<head>
<meta http-equiv="refresh" content="3; url=<?php echo $url; ?>">
</head>
</html>
