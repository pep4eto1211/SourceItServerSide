<?php
	require_once("connectDb.php");
	$username = $_POST['user'];
	$request = mysql_query("SELECT id FROM helpreq ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>