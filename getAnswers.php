<?php
	require_once("connectDb.php");
	$question = $_POST['id'];
	$request = mysql_query("SELECT id FROM answers WHERE reqId = ".$question." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($request, MYSQL_NUM))
	{
		$responseString = $responseString.$returnData[0].",";
	}
	echo($responseString);
?>