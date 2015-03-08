<?php
	require_once("connectDb.php");
	$content = $_POST['content'];
	$project = $_POST['project'];
	$user = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$userId = mysql_result($getUserId,0);
	$add = mysql_query("INSERT INTO posts(content, type, userId, projectId) VALUES ('".$content."','help','".$userId."',".$project.")");
?>