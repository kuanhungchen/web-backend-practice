<?php
	session_start();
	require("../dbconn.php");
	$name = $conn->real_escape_string($_POST['name']);
	$nickname = $conn->real_escape_string($_POST['nickname']);
	$email= $conn->real_escape_string($_POST['email']);
	$password = $conn->real_escape_string($_POST['password']);

	if ($_GET["action"] == "register") {
		printf("Hi %s", $name);
		$sql = "INSERT INTO TB02 (email, password, name, nickname) values ('$email', '$password', '$name', '$nickname')";
		$result = $conn->query($sql);
		header("Location: ../login/index.php?status=registered");
	} else {
		print('test');
	}
?>
