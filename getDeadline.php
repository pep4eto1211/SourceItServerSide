<?php
	require_once("connectDb.php");
	$project = $_POST['project'];
	$getDeadlineQuery = mysql_query("SELECT deadline FROM projects WHERE name LIKE '".$project."'");
	$returnString = mysql_result($getDeadlineQuery, 0);
	echo($returnString);
?>