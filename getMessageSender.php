<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$request = mysql_query("SELECT sender FROM messages WHERE id = ".$id);
	$userId = mysql_result($request, 0);
	$getId = mysql_query("SELECT username FROM users WHERE id=".$userId);
	echo(mysql_result($getId, 0));
?>