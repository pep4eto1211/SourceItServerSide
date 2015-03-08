<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$request = mysql_query("SELECT user FROM jobs WHERE id=".$id);
	$user = mysql_result($request, 0);
	$getUser = mysql_query("SELECT username FROM users WHERE id=".$user);
	echo(mysql_result($getUser, 0));
?>