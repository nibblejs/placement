<?php
require_once('../common_code/global_inc.php');

class DB_Connect
{
		var $dbhost = "localhost";
		var $dbuser = "root";
		var $dbpass = "";
	
	public function __dbconnect()
	{
	}
	
	public function connect()
	{
		$con = mysql_connect($dbhost, $dbuser, $dbpass);
		if(!$con)
		{
			die('Could not make a database connection'. mysql_error());
		}
		
	}
	
	public function select_db(var $dbname)
	{
		$db_sel = mysql_select_db($dbname);
		if(!$db_sel)
		{
			die('Could not select a database'. mysql_error());
		}
	}
	
	public function db_close(var $con)
	{
		$dbclose = mysql_close($con);
		if(!$dbclose)
		{
			die('Could not close a database'. mysql_error());
		}
	}
}
?>