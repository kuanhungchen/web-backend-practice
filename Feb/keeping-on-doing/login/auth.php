<?php
	session_start();
	require("../dbconn.php");
	if ($_GET['action'] == 'login') {
		$email = $conn->real_escape_string($_POST['email']);
		$pswd = $conn->real_escape_string($_POST['password']);
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql);
		if ($result->num_rows == 0) {
			header("Location: ../login/index.php?status=notfound");
		} else {
			$row = $result->fetch_array();
			if ($row['password'] == $pswd) {
				$_SESSION['login'] = true;
				$_SESSION['uid'] = $row['uid'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['nickname'] = $row['nickname'];
				$_SESSION['email'] = $row['email'];
				header("Location: ../dashboard/index.php");
			} else {
				header("Location: ../login/index.php?status=incorrect");
			}
		}
	} else if ($_GET['action'] == 'logout') {
		unset($_SESSION['login']);
		unset($_SESSION['uid']);
		unset($_SESSION['name']);
		unset($_SESSION['nickname']);
		unset($_SESSION['email']);
		unset($_SESSION['task_names']);
		unset($_SESSION['task_descrs']);
		unset($_SESSION['task_days']);
		header("Location: ../login/index.php?status=logout");
	}
?>
