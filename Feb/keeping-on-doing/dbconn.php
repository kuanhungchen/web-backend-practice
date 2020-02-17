<?php
	$db_host = "localhost";
	$db_usr = "u5er";
	$db_pwd = "pa55word";
	$db_name = "DB01";
	$conn = new mysqli($db_host, $db_usr, $db_pwd, $db_name);
	if ($conn->connect_error) {
		die ("Connection error: " . $conn->connect_error);
	}
	
?>
