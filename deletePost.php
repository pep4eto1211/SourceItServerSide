<?php
	require_once("connectDb.php");
	$postId = $_POST['id'];
	$deleteRequest = mysql_query("DELETE FROM posts WHERE id = ".$postId);
?>