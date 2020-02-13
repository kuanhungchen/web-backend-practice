<?php
#session_start();
	require('login.php');
	echo "Now insert student to " . $_SESSION["username"];
	$sdt_id = $_POST['sdt_id'];
	$sdt_name = $_POST["sdt_name"];
	$sdt_age = $_POST["sdt_age"];
	$sql = "insert into TB01 (student_id, student_name, student_age) values ($sdt_id . \"" . $sdt_name . "\", " . $sdt_age . ");";
	if (!$conn->query($sql)) {
		echo "Successfully inserted.\n";
	} else {
		echo "Fair to insert.";
	}
	header('index.php');
	/*
	if (isset($_POST['insert']) || true) {
		if (isset($_POST[sdt_name]) && isset($_POST[sdt_age])) {
		}
		if (!$conn->query($sql)) {
			echo "INSERT SUC\n";
		} else {
			echo "INSERT FAIL\n";
		}
		echo "HEY\n";
	} else {
		echo "NONO\n";
	}
	*/
?>
