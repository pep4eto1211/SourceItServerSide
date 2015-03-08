<?php
	require_once("connectDb.php");
	$request = mysql_query("SELECT id FROM jobs ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>