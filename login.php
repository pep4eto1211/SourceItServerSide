<?php
	require_once("connectDb.php");
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	$pass = md5($pass);
	$pass = md5($pass."pixel");
	$loginRequest = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."' AND password LIKE '".$pass."'");
	if(mysql_num_rows($loginRequest)>0)
	{
		echo("yes");
	}
	else
	{
		echo("no");
	}
?>