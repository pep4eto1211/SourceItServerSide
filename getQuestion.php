<?php
	require_once("connectDb.php");
	$questionId = $_POST['id'];
	$getName = mysql_query("SELECT content FROM helpreq WHERE id = ".$questionId);
	$returnId = mysql_result($getName, 0);
	echo($returnId);
?>