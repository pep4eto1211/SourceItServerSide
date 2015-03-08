<?php
	$path = "Projects/".$_POST["path"];
	if(!is_dir($path))
	{
		mkdir($path);
	}
	$files = glob($path."*");
	foreach($files as $file)
	{
		if(is_dir($file))
		{
			echo $file.",";
		}
	}
?>