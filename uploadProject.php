<?php
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "uploadedProject.".$ext; 
	$projectName = $_REQUEST['project'];
	if($_REQUEST['subfolders'] == "no")
	{
		if (!is_dir("Projects/".$projectName."/")) 
		{
			mkdir("Projects/".$projectName."/");
		}
		$target = "Projects/".$projectName."/".$_FILES['file']['name'];
		//echo($target);
		move_uploaded_file( $_FILES['file']['tmp_name'], $target);
	}
	else
	{
		if (!is_dir("Projects/".$projectName."/".$_REQUEST['subfolders']."/")) 
		{
			mkdir("Projects/".$projectName."/".$_REQUEST['subfolders']."/", 0777, true);
			chmod("Projects/".$projectName."/".$_REQUEST['subfolders']."/", 0777);
		}
		$target = "Projects/".$projectName."/".$_REQUEST['subfolders']."/".$_FILES['file']['name'];
		//echo($target);
		move_uploaded_file( $_FILES['file']['tmp_name'], $target);
	}
?>