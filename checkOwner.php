<?php
	require_once("connectDb.php");
	$projectName = $_POST['project'];
	$username = $_POST['user'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$returnId = mysql_result($getId, 0);
	$checkOwner = mysql_query("SELECT owner FROM projects WHERE name LIKE '".$projectName."'");
	$ownerId = mysql_result($checkOwner, 0);
	if($ownerId == $returnId)
	{
		echo("ok");
	}
	else
	{
		echo("no");
	}
?>