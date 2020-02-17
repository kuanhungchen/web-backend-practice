<?php
	require("../dbconn.php");
	if ($_GET['action'] == 'login') {
		$email = $conn->real_escape_string($_POST['email']);
		$pswd = $conn->real_escape_string($_POST['password']);
		$sql = "SELECT * FROM TB02 WHERE email='$email'";
		$result = $conn->query($sql);
		if ($result->num_rows == 0) {
			header("Location: ../login/index.php?status=notfound");
		} else {
			$row = $result->fetch_array();
			if ($row['password'] == $pswd) {
				$_SESSION['login'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['nickname'] = $row['nickname'];
				header("Location: ../dashboard/index.php");
			} else {
				header("Location: ../login/index.php?status=incorrect");
			}
		}
	}
?>
