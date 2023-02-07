<?php
$zip = new ZipArchive;
$file = $zip->open('file.zip');
if ($file) {
	$zip->extractTo('/extract_path/');
	$zip->close();
	echo 'Archive extracted successfully!';
}
?>
