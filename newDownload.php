<?php
	require_once("connectDb.php");
	$project = $_POST['name'];
	$itemNameQuery = mysql_query("SELECT downloads FROM store WHERE name LIKE '".$project."'");
	$current = mysql_result($itemNameQuery, 0);
	$newD = $current + 1;
	$newStats = mysql_query("UPDATE store SET downloads=".$newD." WHERE name LIKE '".$project."'");
?>