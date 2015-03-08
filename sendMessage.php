<?php
	require_once("connectDb.php");
	$content = $_POST['content'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$from."'");
	$id = mysql_result($getId, 0);
	$getId2 = mysql_query("SELECT id FROM users WHERE username LIKE '".$to."'");
	$id2 = mysql_result($getId2, 0);
	$sendMessage = mysql_query("INSERT INTO messages(content,sender,receiver) VALUES('".$content."',".$id.",".$id2.")");
?>