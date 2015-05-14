<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/uploads'; // Relative to the root


if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$exts = $fileParts['extension'];
	$subpath = '/upload/'.date('Y/m/d').'/'.md5($_FILES['Filedata']['name']).'.'.$exts;
	$targetFile = YYUC_FRAME_PATH.YYUC_PUB.$subpath;
	File::creat_dir_with_filepath($targetFile);
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','mp4','mp3'); // File extensions
	
	if (in_array($exts,$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		Response::write($subpath);
	} else {
		Response::write(0);
	}
}
?>