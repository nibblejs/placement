<?php
	require_once ('global_inc.php');
	$con=mysqli_connect("localhost", "root", "", $dbname);
	$notice=$_POST['notice'];
	$username=$_POST['username'];
	$time=time();
	$date=date("Y-m-d");
	$sql="INSERT INTO notices (username, date, time, notice)	VALUES ('$username','$date','$time', '$notice')";
	$res=mysqli_query($con, $sql);
?>