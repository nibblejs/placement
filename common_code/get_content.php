<?php
	require_once ('global_inc.php');
//	$file=@fopen($ROOT_FILE_PATH."/content.txt","r") or exit("Unable to open file!");
	$file = fopen("content.txt","r") or exit ("Unable to open file!");
	while (!feof($file))
  	{
  		echo fgetc($file);
  	}
	fclose($file);
?>