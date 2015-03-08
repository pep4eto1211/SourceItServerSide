<?php
	require_once("connectDb.php");
	$description = $_POST['description'];
	$category = $_POST['category'];
	$name = $_POST['name'];
	$updateInfo = mysql_query("UPDATE store SET `description` = '".$description."', `category` = ".$category." WHERE `name` LIKE '".$name."'");
?>