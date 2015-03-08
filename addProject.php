<?php
	require_once("connectDb.php");
	$name = $_POST['name'];
	$description = $_POST['desc'];
	$category = $_POST['cat'];
	$user = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$theId = mysql_result($getUserId,0);
	$add = mysql_query("INSERT INTO projects(name,description,category,owner) VALUES ('".$name."','".$description."','".$category."',".$theId.")");
	$getProjectId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$name."'");
	$projectId = mysql_result($getProjectId,0);
	$addRelation = mysql_query("INSERT INTO userprojectrelations(user,project) VALUES(".$theId.",".$projectId.")");
	echo($projectId);
?>