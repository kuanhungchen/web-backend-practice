<?php
    session_start();
    require("../dbconn.php");
    $action = $conn->real_escape_string($_GET['action']);
    $uid = $conn->real_escape_string($_GET['uid']);
    $tname = $conn->real_escape_string($_GET['tname']);
    if ($action == 'delete') {
        $sql = "DELETE FROM progresses WHERE uid='$uid' AND name='$tname'";
        $result = $conn->query($sql);
        $sql = "SELECT FROM progresses WHERE uid='$uid' AND name='$tname'";
        $result = $conn->query($sql);
        if (count($result) == 0) {
            echo "Delete successfully";
        }
    } else if ($action == 'checkin') {
        $sql = "UPDATE progresses SET days=days+1 WHERE uid='$uid' AND name='$tname'";
        $result = $conn->query($sql);
        exit(1);
    }
?>