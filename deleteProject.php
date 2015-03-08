<?php
	require_once("connectDb.php");
	$projectName = $_POST['project'];
	$username = $_POST['user'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$returnId = mysql_result($getId, 0);
	$checkOwner = mysql_query("SELECT owner FROM projects WHERE name LIKE '".$projectName."'");
	$ownerId = mysql_result($checkOwner, 0);
	$getProjectId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$projectName."'");
	$projectId = mysql_result($getProjectId, 0);
	if($ownerId == $returnId)
	{
		$deleteRequest = mysql_query("DELETE FROM projects WHERE name LIKE '".$projectName."'");
		$deleteRequestPosts = mysql_query("DELETE FROM posts WHERE projectId = ".$projectId);
		$deleteRelations = mysql_query("DELETE FROM userprojectrelations WHERE project = ".$projectId);
		echo("ok");
	}
	else
	{
		echo("no");
	}
?>