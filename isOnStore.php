<?php
	require_once("connectDb.php");
	$name = $_POST['project'];
	$request = mysql_query("SELECT onstore FROM projects WHERE name LIKE '".$name."'");
	echo(mysql_result($request, 0));
?>