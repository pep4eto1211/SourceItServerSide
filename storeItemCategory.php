<?php
	require_once("connectDb.php");
	$name = $_POST['name'];
	$getCategory = mysql_query("SELECT category FROM store WHERE name LIKE '".$name."'");
	echo(mysql_result($getCategory, 0));
?>