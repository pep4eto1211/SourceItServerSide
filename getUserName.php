<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$getName = mysql_query("SELECT username FROM users WHERE id=".$id);
	$returnName = mysql_result($getName, 0);
	echo($returnName);
?>