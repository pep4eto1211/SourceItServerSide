<?php
	require_once("connectDb.php");
	$content = $_POST['content'];
	$project = $_POST['project'];
	$user = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$userId = mysql_result($getUserId,0);
	$getProjectId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
	$projectId = mysql_result($getProjectId,0);
	$add = mysql_query("INSERT INTO posts(content, type, userId, projectId) VALUES ('".$content."','post','".$userId."',".$projectId.")");
?>