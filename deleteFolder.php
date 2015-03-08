<?php
	$dir = $_POST['path'];
	$dir = "Projects/".$dir;
	function deleteFolder($path)
	{
		if(count(glob($path."*")) === 0)
		{
			rmdir($path);
		}
		else
		{
			$contents = glob($path."*");
			foreach($contents as $item)
			{
				if(is_file($item))
				{
					unlink($item);
				}
				else
				{
					deleteFolder($item);
				}
			}
			rmdir($path);
		}
	}
	deleteFolder($dir);
?>