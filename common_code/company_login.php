<?php
	require_once("global_inc.php");
	session_start();	
	class student
	{
		$header="http://localhost/placement/student_login";
		public function check()
		{
			$email=stripslashes($_POST['email']);
			$password=stripslashes($_POST["password"]);
			if ($email==NULL || $password==NULL) 
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
			$sql="SELECT * FROM compnay WHERE email='$email' AND password='$pass'";
			$res=mysqli_query($con, $sql);
			if(!$res);
			{
				$_SESSION["err"]="there was a problem in datbase connection";
				header('Location:'.$header.'.php');
			}
			$fnd = mysqli_fetch_array($res);
			$_SESSION['user']=$fnd['Name'];
		}
	}
	$login= new student;
	$login->submit();
	mysql_close($con);
?>