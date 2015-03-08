<?php
	require_once("connectDb.php");
	$id = $_POST['id'];
	$getReportsQuery = mysql_query("SELECT message FROM reports WHERE id = ".$id);
	$responseString = "";
	while($returnData = mysql_fetch_array($getReportsQuery, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0];
	}
	echo($responseString);
?>