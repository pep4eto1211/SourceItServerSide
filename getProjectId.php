<?php
	require_once("connectDb.php");
	$projectName = $_POST['name'];
	$getId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$projectName."'");
	$description = mysql_result($getId, 0);
	echo($description);
?>