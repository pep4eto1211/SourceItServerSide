<?php
	require_once("connectDb.php");
	$user = $_POST['username'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$userId = mysql_result($getId, 0);
	$getAllProjects = mysql_query("SELECT project FROM userprojectrelations WHERE user = ".$userId." ORDER BY project ASC");
	$queryString = "";
	while($projectIds = mysql_fetch_array($getAllProjects, MYSQL_NUM))
	{
		$queryString = $queryString."projectId = ".$projectIds[0]." OR ";
	}
	$queryString = substr($queryString, 0, -4);
	$getPostsQuery = mysql_query("SELECT content, projectId, id FROM notifications WHERE ".$queryString." AND userId <> ".$userId." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($getPostsQuery, MYSQL_NUM))
	{
		$getProjectName = mysql_query("SELECT name FROM projects WHERE id LIKE '".$returnData[1]."'");
		$projectName = mysql_result($getProjectName, 0);
		$responseString = $responseString.$returnData[0].",".$projectName.",".$returnData[2].",";
	}
	echo($responseString);
?>