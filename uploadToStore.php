<?php
	require_once("connectDb.php");
	$name = $_REQUEST['name'];
	$description = $_REQUEST['description'];
	$category = $_REQUEST['category'];
	$project = $_REQUEST['project'];
	$owner = $_REQUEST['owner'];
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "uploadedProject.".$ext;
	$getUserId = mysql_query("SELECT id FROM users WHERE username LIKE '".$owner."'");
	$theId = mysql_result($getUserId,0);
	if($project != "no")
	{
		$getProjectId = mysql_query("SELECT id FROM projects WHERE name LIKE '".$project."'");
		$projectId = mysql_result($getProjectId, 0);
	}
	else
	{
		$projectId = "-1";
	}
	$addAproject = mysql_query("INSERT INTO store(name, description, category, project, owner) VALUES('".$name."','".$description."',".$category.",".$projectId.",".$theId.")");
	$updateProject = mysql_query("UPDATE projects SET onstore=1 WHERE name LIKE '".$project."'");
	if (!is_dir("Store/".$name."/")) 
	{
		mkdir("Store/".$name."/");
	}
	$target = "Store/".$name."/".$name.".sii";
	//echo($target);
	move_uploaded_file( $_FILES['file']['tmp_name'], $target);	
?>