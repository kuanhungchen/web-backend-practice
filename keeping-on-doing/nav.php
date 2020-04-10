<?php
	session_start();
	if (!isset($_SESSION['login'])) {
		header("Location: ../login/index.php?status=logreq");
	}
	require("dbconn.php");
	$uid = $_SESSION['uid'];
	$name = $_SESSION['name'];
	$nickname = $_SESSION['nickname'];
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM progresses WHERE uid='$uid'";
	$result = $conn->query($sql);
	$task_names = array();
	$task_descrs = array();
	$task_days = array();
	while ($row = $result->fetch_array()) {
		array_push($task_names, $row['name']);
		array_push($task_descrs, $row['description']);
		array_push($task_days, $row['days']);
	}
	$_SESSION['task_names'] = $task_names;
	$_SESSION['task_descrs'] = $task_descrs;
	$_SESSION['task_days'] = $task_days;
?>
<br>
<br>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<b class="navbar-brand"><a href="../dashboard/index.php" class="text-muted" style="a:hover{text-decoration:none;}">Keeping on Doing</a></b>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			<li <?php if ($_SERVER['REQUEST_URI'] == '/Feb/keeping-on-doing/dashboard/index.php') { ?> class="active" <?php } ?>><a href="../dashboard/index.php">Home</a></li>
			<li <?php if ($_SERVER['REQUEST_URI'] == '/Feb/keeping-on-doing/task/index.php') { ?> class="active" <?php } ?>><a href="../task/index.php">Task</a></li>
			<li <?php if ($_SERVER['REQUEST_URI'] == '/Feb/keeping-on-doing/leaderboard/index.php') { ?> class="active" <?php } ?>><a href="../leaderboard/index.php">Leaderboard</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../settings/index.php">Setting</a></li>
					<li><a href="../login/auth.php?action=logout">Log out</a></li>
				</ul>
			</li>
			</ul>
		</div>
	</div>
</nav>
