<?php
	require_once("connectDb.php");
	$request = mysql_query("SELECT name FROM store ORDER BY id DESC");
	$responseString = "";
	while($itemNames = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$itemNames[0].",";
	}
	echo($responseString);
?>