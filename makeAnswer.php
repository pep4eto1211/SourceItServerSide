<?php
	require_once("connectDb.php");
	$content = $_POST['content'];
	$question = $_POST['question'];
	$user = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$user."'");
	$id = mysql_result($getUserId,0);
	$add = mysql_query("INSERT INTO answers(content, reqId, user) VALUES ('".$content."',".$question.",".$id.")");
?>