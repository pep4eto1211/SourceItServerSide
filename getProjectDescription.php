<?php
	require_once("connectDb.php");
	$projectName = $_POST['project'];
	$getDescription = mysql_query("SELECT description FROM projects WHERE name LIKE '".$projectName."'");
	$description = mysql_result($getDescription, 0);
	echo($description);
?>