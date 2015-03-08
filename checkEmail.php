<?php
	require_once("connectDb.php");
	$email = $_POST['email'];
	$checkIfUserExists = mysql_query("SELECT username FROM users WHERE email LIKE '".$email."'");
	if(mysql_num_rows($checkIfUserExists)>0)
	{
		echo("et");
	}
	else
	{
		echo("go");
	}
?>