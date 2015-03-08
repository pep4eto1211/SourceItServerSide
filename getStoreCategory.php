<?php
	require_once("connectDb.php");
	$name = $_POST['name'];
	$getCategory = mysql_query("SELECT category FROM store WHERE name LIKE '".$name."'");
	$categoryId = mysql_result($getCategory, 0);
	$getCategoryName = mysql_query("SELECT name FROM categories WHERE id = ".$categoryId);
	echo(mysql_result($getCategoryName, 0));
?>