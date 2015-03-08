<?php
	require_once("connectDb.php");
	$project = $_POST['name'];
	$itemNameQuery = mysql_query("SELECT downloads FROM store WHERE name LIKE '".$project."'");
	echo(mysql_result($itemNameQuery, 0));
?>