<?php
	require_once("connectDb.php");
	$content = $_POST['content'];
	$user = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$userId = mysql_result($getUserId,0);
	$add = mysql_query("INSERT INTO jobs(content, user) VALUES ('".$content."',".$userId.")");
?>