<?php
	require_once("connectDb.php");
	$project = $_POST['project'];
	$deadline = $_POST['deadline'];
	$updateRequest = mysql_query("UPDATE projects SET `deadline` = '".$deadline."' WHERE name LIKE '".$project."'");
?>