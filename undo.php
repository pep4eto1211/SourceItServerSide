<?php
	require_once("connectDb.php");
	$projectName = $_POST['project'];
	$updateLastChange = mysql_query("UPDATE projects SET lastBackup='0' WHERE name LIKE '".$projectName."'");
	function recurse_copy($src,$dst) { 
		$dir = opendir($src); 
		if(!is_dir($dst))
		{
			mkdir($dst);
		}	
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					recurse_copy($src . '/' . $file,$dst . '/' . $file); 
				} 
				else { 
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		} 
		closedir($dir); 
	}
	function rrmdir($dir) 
	{ 
		if (is_dir($dir)) 
		{ 
			$objects = scandir($dir); 
			foreach ($objects as $object) 
			{ 
				if ($object != "." && $object != "..") 
				{ 
					if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
				} 
			} 
			reset($objects); 
			rmdir($dir); 
		} 
	}
	rrmdir("Projects/".$projectName);
	recurse_copy("Projects Backup/".$projectName, "Projects/".$projectName);
	rrmdir("Projects Backup/".$projectName);
?>