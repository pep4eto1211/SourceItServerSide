<?php
	require_once("connectDb.php");
	$username = $_POST['user'];
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$ownerId = mysql_result($getUserId, 0);
	$request = mysql_query("SELECT name FROM store WHERE owner = ".$ownerId." ORDER BY id DESC");
	$responseString = "";
	while($itemNames = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$itemNames[0].",";
	}
	echo($responseString);
?>