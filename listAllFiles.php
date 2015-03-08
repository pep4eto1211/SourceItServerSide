<?php
	$path = "Projects/".$_POST["path"];
	if(!is_dir($path))
	{
		mkdir($path);
	}
	$files = scandir($path);
	foreach($files as $file)
	{
		if(is_file($path.$file))
		{
			echo $file.",";
		}
	}
?>