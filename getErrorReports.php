<?php
	require_once("connectDb.php");
	$getReportsQuery = mysql_query("SELECT id FROM reports ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($getReportsQuery, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>