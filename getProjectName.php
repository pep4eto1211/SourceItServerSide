<?php
	require_once("connectDb.php");
	$projectId = $_POST['projectId'];
	$getName = mysql_query("SELECT name FROM projects WHERE id = ".$projectId);
	$description = mysql_result($getName, 0);
	echo($description);
?>