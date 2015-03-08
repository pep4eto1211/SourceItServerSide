<?php
	require_once("connectDb.php");
	$user = $_POST['username'];
	$users = mysql_query("SELECT username FROM users WHERE username NOT LIKE '".$user."'");
	$responseString = "";
	while($returnData = mysql_fetch_array($users, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>