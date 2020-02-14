<?php
	session_start();
	$conn = new mysqli("localhost", "u5er", "pa55word", "DB01");
	if ($conn->connect_error) {
		die ("cannot connect to server: " . $conn->connect_error);
		exit;
	}
	$_SESSION['username'] = "u5er";
?>

