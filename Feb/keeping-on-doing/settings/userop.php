<?php
	session_start();
	require("../dbconn.php");
	$name = $conn->real_escape_string($_POST['name']);
	$nickname = $conn->real_escape_string($_POST['nickname']);
	$email = $conn->real_escape_string($_POST['email']);
	$password = $conn->real_escape_string($_POST['password']);

	if ($_GET['action'] == "register") {
		// register new user
		printf("Hi %s", $name);
		$sql = "INSERT INTO users (email, password, name, nickname) values ('$email', '$password', '$name', '$nickname')";
		$result = $conn->query($sql);
		header("Location: ../login/index.php?status=registered");
	} else if ($_GET['action'] == "update") {
		$password_old = $conn->real_escape_string($_POST['password_old']);
		$uid = $_SESSION['uid'];
		$sql = "SELECT * FROM users WHERE uid='$uid'";
		$result = $conn->query($sql);
		$row = $result->fetch_array();
		$password_db = $row['password'];
		if ($password_old == $password_db) {
			// update name, nickname
			$_SESSION['name'] = $name;
			$_SESSION['nickname'] = $nickname;
			$sql = "UPDATE users SET name='$name', nickname='$nickname' WHERE uid='$uid'";
			$result = $conn->query($sql);
			if ($_POST['password'] != "") {
				// update password
				$sql = "UPDATE users SET password='$password' WHERE uid='$uid'";
				$result = $conn->query($sql);
			}
			header("Location: ../settings/index.php?status=updated");
		} else {
			header("Location: ../settings/index.php?status=incorrect");
		}
	}
?>
