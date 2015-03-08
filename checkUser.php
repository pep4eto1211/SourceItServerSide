<?php
	require_once("connectDb.php");
	$user = $_POST['user'];
	$checkIfUserExists = mysql_query("SELECT username FROM users WHERE username LIKE '".$user."'");
	if(mysql_num_rows($checkIfUserExists)>0)
	{
		echo("ue");
	}
	else
	{
		echo("go");
	}
?>