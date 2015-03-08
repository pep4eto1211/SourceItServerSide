<?php
	require_once("connectDb.php");
	$username = $_POST['user'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$returnId = mysql_result($getId, 0);
	echo($returnId);
?>