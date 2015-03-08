<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$request = mysql_query("SELECT content FROM jobs WHERE id=".$id);
	echo(mysql_result($request, 0));
?>