<?php
	require_once("connectDb.php");
	$questionId = $_POST['id'];
	$getName = mysql_query("SELECT userId FROM helpreq WHERE id = ".$questionId);
	$returnId = mysql_result($getName, 0);
	$getUser = mysql_query("SELECT username FROM users WHERE id=".$returnId);
	echo(mysql_result($getUser, 0));
?>