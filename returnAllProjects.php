<?php
	require_once("connectDb.php");
	$userId = $_POST['id'];
	$getAllProjects = mysql_query("SELECT project FROM userprojectrelations WHERE user = ".$userId." ORDER BY project ASC");
	$responseString = "";
	while($projectIds = mysql_fetch_array($getAllProjects, MYSQL_NUM))
	{
		$responseString = $responseString.$projectIds[0].",";
	}
	echo($responseString);
?>