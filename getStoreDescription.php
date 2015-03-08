<?php
	require_once("connectDb.php");
	$name = $_POST['name'];
	$getDescription = mysql_query("SELECT description FROM store WHERE name LIKE '".$name."'");
	echo(mysql_result($getDescription, 0));
?>