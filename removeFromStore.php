<?php
	require_once("connectDb.php");
	$dir = $_POST['name'];
	$name = $dir;
	$dir = "Store/".$dir;
	$getProjectItem = mysql_query("SELECT project FROM store WHERE name LIKE '".$name."'");
	if(mysql_result($getProjectItem, 0) != "-1")
	{
		$updateProject = mysql_query("UPDATE projects SET onstore=0 WHERE id = ".mysql_result($getProjectItem, 0));
	}
	$removeFromStoreQuery = mysql_query("DELETE FROM store WHERE name LIKE '".$name."'");
	unlink($dir."/icon.png");
	unlink($dir."/screenshot.png");
	unlink($dir."/".$name.".sii");
	rmdir($dir)
?>