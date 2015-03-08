<?php
	$name = $_POST["project"];
	$path = "Projects/".$name."/";
	function getAllFiles($dir) {
    // open handler for the directory
    $iter = new DirectoryIterator($dir);

    foreach( $iter as $item ) {
    	// make sure you don't try to access the current dir or the parent
    	if ($item != '.' && $item != '..') {
    		if( $item->isDir() ) {
    			// call the function on the folder
    			getAllFiles("$dir/$item");
    		} else {
    			// print files
    			echo $dir . "/" .$item->getFilename() . ",";
    		}
    	}
    }
}
	getAllFiles($path);
?>