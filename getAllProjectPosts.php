<?php
	require_once("connectDb.php");
	$projectName = $_POST['projectName'];
	$getDescription = mysql_query("SELECT id FROM projects WHERE name LIKE '".$projectName."'");
	$id = mysql_result($getDescription, 0);
	$getPostsQuery = mysql_query("SELECT content, type, userId, id FROM posts WHERE projectId = ".$id." ORDER BY id DESC");
	$responseString = "";
	while($returnData = mysql_fetch_array($getPostsQuery, MYSQL_NUM))
	{
		$getUser = mysql_query("SELECT username FROM users WHERE id =".$returnData[2]);
		$username = mysql_result($getUser, 0);
		$responseString = $responseString.$returnData[0].",".$returnData[1].",".$username.",".$returnData[3].",";
	}
	echo($responseString);
?>