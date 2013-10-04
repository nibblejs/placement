<?php
	require_once("global_inc.php");
	session_start();	
	class student
	{
		$header="http://localhost/placement/recruiters_login";
		public function check()
		{
			$username=stripslashes($_POST['username']);
			$password=stripslashes($_POST["password"]);
			if ($username==NULL || $password==NULL) 
			{
				$_SESSION["err"]="please enter details correctly, all details are mandatory";
				header('Location:'.$header.'.php');
			}
			else
				return md5($password);
		}
		public function get()
		{
			$pass=$this->check();
			$sql="SELECT * FROM recruiters_login WHERE username='$username' AND password='$pass'";
			$res=mysqli_query($con, $sql);
			if(!$res);
			{
				$_SESSION["err"]="there was a problem in datbase connection";
				header('Location:'.$header.'.php');
			}
			$fnd = mysqli_fetch_array($res);
			$_SESSION['user']=$fnd['FirstName']." ".$fnd['LastName'];
		}
		
	$login= new student;
	$login->submit();
	mysql_close($con);
?>