<?php
	require_once("connectDb.php");
	$project = $_POST['name'];
	$getId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
	$id = mysql_result($getId, 0);
	$getAllProjects = mysql_query("SELECT user FROM userprojectrelations WHERE project = ".$id);
	$responseString = "";
	while($projectIds = mysql_fetch_array($getAllProjects, MYSQL_NUM))
	{
		$getUser = mysql_query("SELECT username FROM users WHERE id =".$projectIds[0]);
		$responseString = $responseString.mysql_result($getUser, 0).",";
	}
	echo($responseString);
?>