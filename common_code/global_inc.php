<?php 

	global $dbname;
	global $con;
	$dbname="placement";
	$con=mysql_connect("localhost", "root", "");
	$dbselect = mysql_select_db("placement",$con);
	$ROOT_FILE_PATH = $_SERVER['DOCUMENT_ROOT'].'placement'.'/';// Variable to be used for absolute linking
	$ROOT_PATH = "localhost";

	if ($_SERVER['SERVER_NAME'] == "localhost")
	{
		$ROOT_PATH .= "";
	}
	elseif ($_SERVER['SERVER_NAME'] == "localhost")
	{
		$ROOT_PATH .= "localhost:8080/placement/";
	}
	else
	{
		$ROOT_PATH .= $_SERVER['SERVER_NAME']."/placement"; // . "/localhost";
	}

?>