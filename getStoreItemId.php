<?php
	require_once("connectDb.php");
	$project = $_POST['project'];
	$getName = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
	$projectId = mysql_result($getName, 0);
	$itemNameQuery = mysql_query("SELECT name FROM store WHERE project = ".$projectId);
	echo(mysql_result($itemNameQuery, 0));
?>