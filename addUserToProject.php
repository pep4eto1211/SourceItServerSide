<?php
	require_once("connectDb.php");
	$username = $_POST['username'];
	$project = $_POST['project'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$returnId = mysql_result($getId, 0);
	$getName = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
	$projectId= mysql_result($getName, 0);
	$addRelation = mysql_query("INSERT INTO userprojectrelations(user,project) VALUES(".$returnId.",".$projectId.")");
?>