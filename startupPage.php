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
	$getPostsQuery = mysql_query("SELECT content, type, userId, projectId, id FROM posts WHERE ".$queryString." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($getPostsQuery, MYSQL_NUM))
	{
		$getUser = mysql_query("SELECT username FROM users WHERE id =".$returnData[2]);
		$username = mysql_result($getUser, 0);
		$getProjectName = mysql_query("SELECT name FROM projects WHERE id LIKE '".$returnData[3]."'");
		$projectName = mysql_result($getProjectName, 0);
		$responseString = $responseString.$returnData[0].",".$returnData[1].",".$username.",".$projectName.",".$returnData[4].",";
	}
	echo($responseString);
?>