<?php
	require_once("connectDb.php");
	$name = $_POST['name'];
	$checkBeckup = mysql_query("SELECT lastBackup FROM projects WHERE name LIKE '".$name."'");
	$backUp = mysql_result($checkBeckup, 0);
	echo($backUp);
?>