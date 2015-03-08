<?php
	require_once("connectDb.php");
	$request = mysql_query("SELECT name FROM store ORDER BY id DESC LIMIT 0,20");
	$responseString = "";
	while($itemNames = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$itemNames[0].",";
	}
	echo($responseString);
?>