<?php
	require_once("connectDb.php");
	$username = $_POST['user'];
	$getId = mysql_query("SELECT id FROM users WHERE username LIKE '".$username."'");
	$returnedId = mysql_result($getId, 0);
	$request = mysql_query("SELECT id FROM helpreq WHERE userId = ".$returnedId." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>