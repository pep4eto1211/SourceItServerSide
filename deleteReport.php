<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$getReportsQuery = mysql_query("DELETE FROM reports WHERE id = ".$id);
?>