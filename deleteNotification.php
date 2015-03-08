<?php
	require_once("connectDb.php");
	$notificationId = $_POST['id'];
	$deleteRequest = mysql_query("DELETE FROM notifications WHERE id = ".$notificationId);
?>