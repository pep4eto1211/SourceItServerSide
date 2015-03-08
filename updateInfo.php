<?php
	require_once("connectDb.php");
	$category = $_POST['category'];
	$description = $_POST['description'];
	$name = $_POST['name'];
	$updateRequest = mysql_query("UPDATE projects SET `category` = ".$category.", `description` = '".$description."' WHERE name LIKE '".$name."'");
?>