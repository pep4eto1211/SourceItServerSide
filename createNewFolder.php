<?php
	$path = "Projects/".$_POST["path"];
	if(!is_dir($path))
	{
		mkdir($path);
		echo("ok");
	}
	else
	{
		echo("exists");
	}
?>