<?php
	$st = $_GET['stat'];
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = " "+$st+" ";
	fwrite($myfile, $txt);
	fclose($myfile);
?>