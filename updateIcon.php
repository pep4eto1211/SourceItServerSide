<?php
	$name = $_REQUEST['name'];
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = "uploadedProject.".$ext;
	if (!is_dir("Store/".$name."/")) 
	{
		mkdir("Store/".$name."/");
	}
	unlink("Store/".$name."/icon.png");
	$target = "Store/".$name."/icon.png";
	move_uploaded_file( $_FILES['file']['tmp_name'], $target);	
	echo($target);
?>