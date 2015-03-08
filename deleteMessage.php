<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$deleteRequest = mysql_query("DELETE FROM messages WHERE id = ".$id);
?>