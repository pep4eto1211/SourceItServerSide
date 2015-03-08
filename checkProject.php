<?php
	require_once("connectDb.php");
	$project = $_POST['project'];
	$checkIfProjectExists = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
	if(mysql_num_rows($checkIfProjectExists)>0)
	{
		echo("pt");
	}
	else
	{
		echo("go");
	}
?>