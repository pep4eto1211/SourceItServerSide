<?php
	require_once("connectDb.php");
	$projectName = $_POST['project'];
	$getId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$projectName."'");
	$description = mysql_result($getId, 0);
	$request = mysql_query("SELECT id FROM helpreq WHERE projectId = ".$description." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>