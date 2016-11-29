<?php 
require_once 'app/start.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the DIR Listing</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
        <h2>Welcome to the DIR Listing</h2>
        <?php
        	// Add Folders to ignore
	        $ignore_folders = array();
	        
	        // Add files to ignore
	        $ignore_files = array();

	        // Don't edit below here
	        $dirs = array_filter(glob('*'), 'is_dir');
	        $files = array_filter(glob('*'), 'is_file');
	        echo '<ul>';
	        foreach($dirs as $d){
	            if(!in_array($d, $ignore_folders)){
	                echo '<li><i class="fa fa-folder"></i> <a href="'.BASE_URL.'/'.$d.'">'.$d.'</a></li>';
	            }
	        }
	        foreach($files as $file){
	            if(!in_array($file, $ignore_files)){
	            	$icon = new iconFinder;
	            	$img = $icon->get_icon($file);
	                echo '<li>'.$img.' <a href="'.BASE_URL.'/'.$file.'">'.$file.'</a></li>';
	            }
	        }
	        echo '</ul>';
        ?>
</body>
</html>