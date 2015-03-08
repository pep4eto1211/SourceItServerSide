<?php
	require_once("connectDb.php");
	$message = $_POST['message'];
	$source = $_POST['source'];
	$code = $_POST['code'];
	$file = $_POST['file'];
	$insert = mysql_query("INSERT INTO reports(message, source, code, file) VALUES('".$message."', '".$source."', '".$code."', '".$file."')");
?>